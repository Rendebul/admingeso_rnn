import sys
import numpy
import admin_train_P1
from geopy.distance import vincenty
import pyrenn
import csv
from datetime import datetime




lista_puntos = []
lista_recorridos = []
bRecorridoV = False
lista_puntosV = []
lista_puntosI = []
Last_Recorrido = "0"
Cont_Recorrido = 0
Cont_Recorrido_Total = 0
fin_global = []


def parser_time(dato):
	spliter = dato[1].split(' ')
	splitFecha = spliter[0].split('/')
	splitHora = spliter[1].split(':')
	dia = float(splitFecha[0])/31
	#horaStand = (float(splitHora[0]))/(24)
	#minStand = (float(splitHora[1]))/(60)
	#segStand = (float(splitHora[2]))/60
	segLlevo = ((int(splitHora[0])*3600)+(int(splitHora[1])*60)+int(splitHora[2]))
	segundosDia = 24*60*60
	tiempo_sin = numpy.sin(2*numpy.pi*segLlevo/segundosDia)
	tiempo_cos = numpy.cos(2*numpy.pi*segLlevo/segundosDia)
	#datoStand = [dia,horaStand,minStand,segStand,dato[1]]
	datoStand = [dia,tiempo_sin, tiempo_cos,dato[1]]
	#print (datoStand)
	return datoStand

	
def agregar_recorrido():
	celda_recorrido = []
	puntos_r = lista_puntos[:]
	celda_recorrido.append(Last_Recorrido)
	#print str(bRecorridoV)+" AGREGANDO RECORRIDO"

	if(bRecorridoV == True):    
		celda_recorrido.append("V")
	else:
		celda_recorrido.append("I")

	celda_recorrido.append(Cont_Recorrido)
	celda_recorrido.append(puntos_r)
	
	lista_recorridos.append(celda_recorrido)
	
	#print (puntos_r)
	
	del lista_puntos[:]
	
	#print(lista_recorridos[len(lista_recorridos)-1][3])
	
def iterarDatos(datos):
	global Last_Recorrido
	global Cont_Recorrido
	global Cont_Recorrido_Total
	global bRecorridoV
	global lista_puntosV
	global lista_puntosI
	global lista_puntos
	lista_puntosV = []
	cont_print = 0
	for record in datos:
	#Lista_recorridos[ Numero de patente, I/V , Num_Recorrido , Lista_Puntos[ Lista_Fecha,Lista_Hora,LatLong ]
		if(Last_Recorrido == "0"):
			if(record[3] == "V"):
				bRecorridoV = True
			else:
				bRecorridoV = False
			Last_Recorrido = record[0]
		
		#Cambio de recorrido
		
		if(Last_Recorrido != record[0]):
				
			#Agregamos el recorrido anterior a la lista de recorridos si no es vacia
			#print len(lista_puntos)
			if len(lista_puntos) > 20:
				agregar_recorrido()
				Cont_Recorrido_Total += 1
			else:
				del lista_puntos[:]
			
			#Inicializamos la ruta en funcion de la nueva
			
			if(record[3] == "V"):
				bRecorridoV = True
			else:
				bRecorridoV = False
			Last_Recorrido = record[0]
			Cont_Recorrido = 0
		
			#print ("\n\n\n\n\n\n\n\n\n\n\n\n\n")
			#print ("---- Cambio de patente detectado. Procediendo a reiniciar contadores ----")
			#print ("|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||")
		
		#Recreamos el cambio de ruta
		if(record[3] == "V" and bRecorridoV == False):
			
			cont_print += len(lista_puntos)
			agregar_recorrido()
			bRecorridoV = True
			Cont_Recorrido += 1
			Cont_Recorrido_Total += 1
			#print ("Cambio de recorrido detectado, Recorrido en V")
			#print("Cantidad de recorridos de la patente "+ str(Cont_Recorrido))
			#print("Cantidad de recorridos totales "+ str(Cont_Recorrido_Total))
			
		
		elif(record[3] == "I" and bRecorridoV == True):
			#agregar_recorrido()
			del lista_puntos[:]
			bRecorridoV = False
			#Cont_Recorrido += 1
			#Cont_Recorrido_Total += 1
			#print ("Cambio de recorrido detectado, Recorrido en I")
			#print("Cantidad de recorridos de la patente "+ str(Cont_Recorrido))
			#print("Cantidad de recorridos totales "+ str(Cont_Recorrido_Total))
		
		celda = []
		
		tiempo = parser_time(record)
		#DIA
		celda.append(tiempo[0])
		#HORA
		#celda.append(tiempo[1])
		#MINUTO
		#celda.append(tiempo[2])
		celda.append(tiempo[1]) #tiempoSin
		celda.append(tiempo[2]) #tiempoCOs
		#SEGUNDO
		#celda.append(tiempo[3])
		
		celda.append(float(record[4].replace(",", ".")))
		celda.append(float(record[5].replace(",", ".")))

		celda.append(tiempo[3])
		#celda.append(parser_date(record))
		
		#celda.append(Cont_Recorrido_Total)
		
		if(cont_print % 10000 == 0):
			print (celda)
			
		lista_puntos.append(celda)
		
		if(bRecorridoV == True):
			lista_puntosV.append(celda)
		else:
			lista_puntosI.append(celda)

			
	#Hacer la ultima operacion para la ultima ruta
	#Cont_Recorrido += 1
	#Cont_Recorrido_Total += 1
	#agregar_recorrido()
	print("Cantidad de puntos "+ str(cont_print))
	print("Cantidad de recorridos de la patente "+ str(Cont_Recorrido))
	print("Cantidad de recorridos totales "+ str(Cont_Recorrido_Total))

	return lista_recorridos

def filtrarDatos(datos):
	datos = datos[:]
	print (datos[0])
	cantidad_27 = 0
	cantidad_24 = 0
	pos_ruta = 0

	promedio_km = 0.0
	cantidad_rutas = 0

	for reco in datos:
		dis = 0
		cont = 0
		for punto in reco[3]:
			if(cont<(len(reco[3])-1)):
				dis += vincenty((punto[3],punto[4]),(reco[3][cont+1][3],reco[3][cont+1][4])).meters
			cont += 1

		if(dis > 27000):
			cantidad_27 += 1
			del datos[pos_ruta]
			continue

		elif(dis < 26000):
			cantidad_24 += 1
			del datos[pos_ruta]
			continue

		promedio_km += dis
		cantidad_rutas += 1
		pos_ruta += 1

	#promedio_km = promedio_km / float(cantidad_rutas)
	#print "Promedio de km de las rutas "+ str(promedio_km) 
	#print ("Cantida de rutas detectadas sobre 27K = "+ str(cantidad_27))
	#print ("Cantida de rutas detectadas bajo 26K = "+ str(cantidad_24))
	return datos

def prepTrain(l_recorridos_filtrados,MAX_RECORRIDOS):
	matriz = []
	salidas = []

	#l_recorridos_filtrados es la lista con los recorridos filtrados, listos para ser ingresados a la red

	#Reco tiene los siguientes parametros:
	'''
	reco[0] = recorrido de la ruta 
	reco[1] = IDA o VUELTA de la ruta 
	reco[2] = ID de la ruta (es la N ID ruta de dicha patente)
	reco[3] = lista de listas de puntos latlong. Aqui van todos los puntos de dicho recorrido

	'''
	contador_recorrido = 0

	for reco in l_recorridos_filtrados:
		
		if(contador_recorrido > MAX_RECORRIDOS):
			break

		#print reco
		dis = 0

		#OJO: Se parte de 1 ya  que la recurrencia necesita de un punto anterior
		cont = 1
		for punto in reco[3]:

			'''
			Punto tiene los siguientes parametros:

			punto[0] DIA 
			punto[1] TIEMPO-SENO
			punto[2] TIEMPO-COSENO
			punto[3] LAT , QUE ES IGUAL A reco[3][cont][4]
			punto[4] LONG , QUE ES IGUAL A reco[3][cont][5]
			punto[5] TIMESTAMP DE FECHAHORA

			'''

			if(cont<(len(reco[3])-1)):
				dato = []
				#print(punto[0])
				t1 = datetime.strptime(reco[3][cont-1][5],"%d/%m/%Y %H:%M:%S")
				t2 = datetime.strptime(reco[3][cont][5],"%d/%m/%Y %H:%M:%S")
				dt = t2-t1
				dato.append(punto[0])
				dato.append(punto[1])
				dato.append(punto[2])
				#dato.append(punto[3])



				#print cont
				#print "-------ANTERIOR----------"
				#POS ANTERIOR
				dato.append(dis)

				#print dis

				#POS ACTUAL
				#print "-------ACTUAL---------"
				#print "VICENTY "+str(vincenty((reco[3][cont-1][4],reco[3][cont-1][5]),(reco[3][cont][4],reco[3][cont][5])).meters)
				#print "VICENTY DIVIDIDO "+str(vincenty((reco[3][cont-1][4],reco[3][cont-1][5]),(reco[3][cont][4],reco[3][cont][5])).meters/27000)
				
				#VICENTY TOMA EL PUNTO ANTERIOR Y EL PUNTO ACTUAL PARA OBTENER CUANTOS METROS HAY, Y LOS DIVIDE POR 27K
				dis += vincenty((reco[3][cont-1][3],reco[3][cont-1][4]),(reco[3][cont][3],reco[3][cont][4])).meters/27500
				dato.append(dis)

				#print dis

				#dato.append(dis)
				#dato.append(vincenty((reco[3][cont-1][4],reco[3][cont-1][5]),(punto[4],punto[5])).meters/27000.0)
				matriz.append(dato)
				#print (dt.seconds)
				result = (dt.seconds)
				#print result
				salidas.append(result)
				#if(dis > 28000):
					#print dis
					#print "DETECTADA RUTA CON SOBRE 28KM DE DISTANCIA"
			cont += 1
		#print "---------- FIN"
	return [matriz,salidas]

def leer_csv():
	celdas_totales_csv = []
	with open("/var/www/laravel/public/python/1-10-Janeiro-Belem-out.csv", 'rb') as f:
			reader = csv.reader(f)
			your_list = list(reader)
			celdas_totales_csv.extend(your_list)
	return celdas_totales_csv

def leer_todos_csv():
	lista_archivos = []
	celdas_totales_csv = []

	#Lista de archivos a leer
	archivos = open("/var/www/laravel/public/python/nombres_csv_procesar.txt",'r')

	for archivo in archivos:
		lista_archivos.append(archivo)
	archivos.close()

	for archivo_leer in lista_archivos:
		with open(("/var/www/laravel/public/python/"+archivo_leer.replace("\n", "").replace(".xlsx","-out.csv")), 'rb') as f:
			reader = csv.reader(f)
			your_list = list(reader)
			celdas_totales_csv.extend(your_list)
	return celdas_totales_csv   


#funcion que expresa la hora como tiempo-seno y tiempo-coseno
#retorna una lista de la forma [tiempo_seno, tiempo_coseno] de la hora ingresada
def expresarHoraCiclo(hora):
	splitHora=hora.split(":")
	horas=splitHora[0]
	minutos=splitHora[1]
	segundos=splitHora[2]
	segLlevo = (int(horas)*3600)+(int(minutos)*60)+int(segundos)
	segundosDia = 24*60*60
	tiempo_sin = numpy.sin(2*numpy.pi*segLlevo/segundosDia)
	tiempo_cos = numpy.cos(2*numpy.pi*segLlevo/segundosDia)
	datoStand = [tiempo_sin, tiempo_cos]
	return datoStand

#funcion que obtiene el dia y mes del timestamp de fecha
#LOS ENTREGA NORMALIZADOS
def obtenerDiaMes(fecha):
	splitFecha=fecha.split("-")
	ano=splitFecha[0]
	mes=float(splitFecha[1])/12
	dia=float(splitFecha[2])/31
	fechaStand = [mes,dia]
	return fechaStand




def main():
	if len(sys.argv) >= 2:
			#SE RECIBE: FECHA HORA LAT_INICIAL LONG_INICIAL LAT_FINAL LONG_FINAL
			#aqui se debe llamar a la red neuronal 
			#Se traduce las variables de entrada 
			entradaRed=[]
			fecha=sys.argv[1]
			hora=sys.argv[2]
			latitudInicial=sys.argv[3]
			longitudInicial=sys.argv[4]
			latitudFinal=sys.argv[5]
			longitudFinal=sys.argv[6]
			tiempo=expresarHoraCiclo(hora)
			mesDia=obtenerDiaMes(fecha)
			tiempo_sin = tiempo[0]
			tiempo_cos = tiempo[1]
			mesNormalizado = mesDia[0]
			diaNormalizado = mesDia[1]
			#Se agregan las 3 primeras entradas: dia, tiempo_sin, tiempo_cos
			entradaRed.append(diaNormalizado)
			entradaRed.append(tiempo_sin)
			entradaRed.append(tiempo_cos)
			#Falta agregar el porcentaje de distancia del total que representa cada punto
			#se cargan todos los datos
			records = leer_todos_csv()
			#se obtienen los recorridos
			listaRecorridos = iterarDatos(records)
			#se filtran los recorridos
			listaRecorridosFiltrados = filtrarDatos(listaRecorridos)
			#se usa el primer recorrido como pivote
			#recorridoPivote es la lista de puntos del primer recorrido filtrado
			recorridoPivote = listaRecorridosFiltrados[0][3]
			cantidadPuntosRecorridoPivote = len(recorridoPivote)
			#para determinar a que punto del recorrido se asociara cada par de lat,long que viene desde la app
			#se suman las lat y long correspondientes y se calcula el modulo de esa suma con la cantidad de puntos
			#del recorrido, para determinar la posicion del punto al que corresponde el par de coordenadas
			sumaInicial=int(float(latitudInicial)+float(longitudInicial))
			sumaFinal=int(float(latitudFinal)+float(longitudFinal))
			indicePuntoInicial=sumaInicial%cantidadPuntosRecorridoPivote
			indicePuntoFinal=sumaFinal%cantidadPuntosRecorridoPivote
			#se debe hacer que siempre el indice del punto final sea mayor que el del punto inicial
			while(indicePuntoFinal<=indicePuntoInicial):
				#se modifica el indice del punto final, agregandole la mitad de la cantidad de puntos del recorrido pivote
				indicePuntoFinal=indicePuntoFinal+(cantidadPuntosRecorridoPivote/2)
			#una vez obtenidos los indices de los puntos
			#se debe calcular la distancia que hay desde el inicio de la ruta hasta cada punto, acumulando la distancia entre sus puntos intermedios
			#para que esta sea continua
			#LA DISTANCIA ES CALCULADA Y NORMALIZADA A LA VEZ
			distancia=0
			for i in range(0, indicePuntoFinal):
				puntoActual=recorridoPivote[i]
				puntoSiguiente=recorridoPivote[i+1]
				latitudActual = puntoActual[3]
				longitudActual = puntoActual[4]
				latitudSiguiente = puntoSiguiente[3]
				longitudSiguiente= puntoSiguiente[4]
				distancia = distancia + (vincenty((latitudActual,longitudActual),(latitudSiguiente,longitudSiguiente)).meters/27500)
				#Si el punto siguiente era el punto inicial que fue "enviado" por la app
				if((i+1)==indicePuntoInicial):
					#se agrega la distancia como entrada a la red, ya que repsenta la distancia desde el inicio de la ruta completa
					#hasta el punto de "inicio" indicado por la aplicacion Android
					entradaRed.append(distancia)
			#al terminar el ciclo, se tendra la distancia desde el inicio de la ruta al punto final indicado por la aplicacion Android
			#por lo que se agrega como entrada a la red
			entradaRed.append(distancia)
			#Una vez "traducidos" los datos enviados por la aplicacion
			#se procede a cargar la red
			redNeuronalRecurrente = pyrenn.loadNN('rnn_5_entradas.csv')
			#se debe trasponer la matriz de entradas creada, aunque solo sea un set de entrada el que se consulta
			print("Entrada de la red: ")
			print(entradaRed)
			entrada = (numpy.array(entradaRed)).transpose()
			print("Entrada traspuesta: ")
			print(entrada)
			salida = pyrenn.NNOut(entrada,redNeuronalRecurrente)
			print("Salida de la red")
			print(salida)
			return salida

	else:
			print ("Este programa necesita parametros")
			return 0

if __name__ == "__main__":
	main()