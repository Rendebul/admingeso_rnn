<?php

use App\Comuna;
use Illuminate\Database\Seeder;
use \Carbon\Carbon;

class EstablecimientoSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$establecimientos = [
			        [
            "name" => "Actividades Gestionadas por la Dirección del Servicio para apoyo de la Red (S.S de Arica)",
            "code" => "101010",
            "comuna_id" => 15101
        ],
        [
            "name" => "PRAIS (S.S Arica)",
            "code" => "101011",
            "comuna_id" => 15101
        ],
        [
            "name" => "Clínica Dental Móvil Simple. Pat. PW4076 (Arica)",
            "code" => "101012",
            "comuna_id" => 15101
        ],
        [
            "name" => "Oficina Sanitaria Chacalluta",
            "code" => "101090",
            "comuna_id" => 15101
        ],
        [
            "name" => "Hospital Dr. Juan Noé Crevanni (Arica)",
            "code" => "101100",
            "comuna_id" => 15101
        ],
        [
            "name" => "Clínica Hebe",
            "code" => "101203",
            "comuna_id" => 15101
        ],
        [
            "name" => "Clínica San Agustín",
            "code" => "101212",
            "comuna_id" => 15101
        ],
        [
            "name" => "Clínica San José",
            "code" => "101213",
            "comuna_id" => 15101
        ],
        [
            "name" => "Clínica Arica",
            "code" => "101214",
            "comuna_id" => 15101
        ],
        [
            "name" => "Complejo Penitenciario",
            "code" => "101215",
            "comuna_id" => 15101
        ],
        [
            "name" => "Servicio Médico Estudiantil",
            "code" => "101216",
            "comuna_id" => 15101
        ],
        [
            "name" => "Centro Clínico Militar Arica",
            "code" => "101217",
            "comuna_id" => 15101
        ],
        [
            "name" => "Policlínico del Trabajador AChS Arica",
            "code" => "101219",
            "comuna_id" => 15101
        ],
        [
            "name" => "Instituto de Rehabilitación Infantil TELETÓN (Arica)",
            "code" => "101222",
            "comuna_id" => 15101
        ],
        [
            "name" => "Centro Médico Monte Sinaí",
            "code" => "101223",
            "comuna_id" => 15101
        ],
        [
            "name" => "Clínica Santo Domingo",
            "code" => "101224",
            "comuna_id" => 15101
        ],
        [
            "name" => "Centro Integral de Salud",
            "code" => "101225",
            "comuna_id" => 15101
        ],
        [
            "name" => "Policlínico de Gendarmería",
            "code" => "101227",
            "comuna_id" => 15101
        ],
        [
            "name" => "Policlínico del Agricultor",
            "code" => "101228",
            "comuna_id" => 15101
        ],
        [
            "name" => "Centro Odontológico Arisa",
            "code" => "101229",
            "comuna_id" => 15101
        ],
        [
            "name" => "Centro de Salud Mutual CChC Arica",
            "code" => "101234",
            "comuna_id" => 15101
        ],
        [
            "name" => "Centro Dental Megasalud SpA",
            "code" => "101236",
            "comuna_id" => 15101
        ],
        [
            "name" => "Clínica Dr. Héctor Sánchez",
            "code" => "101237",
            "comuna_id" => 15101
        ],
        [
            "name" => "Clínica Mella Arica y Compañía Ltda.",
            "code" => "101238",
            "comuna_id" => 15101
        ],
        [
            "name" => "Policlínico Médico-Dental de Carabineros",
            "code" => "101239",
            "comuna_id" => 15101
        ],
        [
            "name" => "Laboratorio Clínico San José Ltda.",
            "code" => "101240",
            "comuna_id" => 15101
        ],
        [
            "name" => "Laboratorio Bionet",
            "code" => "101241",
            "comuna_id" => 15101
        ],
        [
            "name" => "Laboratorio Clínico y Hematológico Diagnotest",
            "code" => "101242",
            "comuna_id" => 15101
        ],
        [
            "name" => "Laboratorio Clínico Central",
            "code" => "101243",
            "comuna_id" => 15101
        ],
        [
            "name" => "Laboratorio Clínico San Martín",
            "code" => "101244",
            "comuna_id" => 15101
        ],
        [
            "name" => "Laboratorio Clínico Dialab",
            "code" => "101245",
            "comuna_id" => 15101
        ],
        [
            "name" => "Laboratorio Clínico Labonorte",
            "code" => "101246",
            "comuna_id" => 15101
        ],
        [
            "name" => "Laboratorio Clínico Chungará",
            "code" => "101247",
            "comuna_id" => 15101
        ],
        [
            "name" => "Laboratorio Clínico Biolascer",
            "code" => "101248",
            "comuna_id" => 15101
        ],
        [
            "name" => "Centro de Salud Familiar Víctor Bertín Soto",
            "code" => "101300",
            "comuna_id" => 15101
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Amador Neghme de Arica",
            "code" => "101302",
            "comuna_id" => 15101
        ],
        [
            "name" => "Centro de Salud Familiar E. U. Iris Véliz Hume (Ex Oriente)",
            "code" => "101303",
            "comuna_id" => 15101
        ],
        [
            "name" => "Centro de Salud Familiar Putre",
            "code" => "101304",
            "comuna_id" => 15201
        ],
        [
            "name" => "Centro de Salud Familiar Remigio Sapunar",
            "code" => "101305",
            "comuna_id" => 15101
        ],
        [
            "name" => "Centro de Salud Ambiental de Arica",
            "code" => "101306",
            "comuna_id" => 15101
        ],
        [
            "name" => "Centro de Salud Familiar Eugenio Petruccelli Astudillo (ex Punta Norte)",
            "code" => "101307",
            "comuna_id" => 15101
        ],
        [
            "name" => "Posta de Salud Rural San Miguel de Azapa",
            "code" => "101400",
            "comuna_id" => 15101
        ],
        [
            "name" => "Posta de Salud Rural Poconchile",
            "code" => "101401",
            "comuna_id" => 15101
        ],
        [
            "name" => "Posta de Salud Rural Belén (Putre)",
            "code" => "101402",
            "comuna_id" => 15201
        ],
        [
            "name" => "Posta de Salud Rural Visviri",
            "code" => "101404",
            "comuna_id" => 15202
        ],
        [
            "name" => "Posta de Salud Rural Alcérreca",
            "code" => "101405",
            "comuna_id" => 15202
        ],
        [
            "name" => "Posta de Salud Rural Codpa",
            "code" => "101406",
            "comuna_id" => 15102
        ],
        [
            "name" => "Posta de Salud Rural Ticnamar",
            "code" => "101407",
            "comuna_id" => 15201
        ],
        [
            "name" => "Posta de Salud Rural Sobraya",
            "code" => "101408",
            "comuna_id" => 15101
        ],
        [
            "name" => "ESSMA Norte de Arica",
            "code" => "101607",
            "comuna_id" => 15101
        ],
        [
            "name" => "ESSMA Sur de Arica",
            "code" => "101608",
            "comuna_id" => 15101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Dr. Miguel Massa",
            "code" => "101702",
            "comuna_id" => 15101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Dr. René García Valenzuela",
            "code" => "101703",
            "comuna_id" => 15101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Cerro La Cruz",
            "code" => "101704",
            "comuna_id" => 15101
        ],
        [
            "name" => "Actividades Gestionadas por la Dirección del Servicio para apoyo de la Red (S.S de Iquique)",
            "code" => "102010",
            "comuna_id" => 1101
        ],
        [
            "name" => "PRAIS (S.S. Iquique)",
            "code" => "102011",
            "comuna_id" => 1101
        ],
        [
            "name" => "Clínica Dental Móvil Simple. Pat. RW6740 (Iquique)",
            "code" => "102012",
            "comuna_id" => 1101
        ],
        [
            "name" => "Hospital Dr. Ernesto Torres Galdames (Iquique)",
            "code" => "102100",
            "comuna_id" => 1101
        ],
        [
            "name" => "Clínica Iquique",
            "code" => "102200",
            "comuna_id" => 1101
        ],
        [
            "name" => "Clínica Tarapacá",
            "code" => "102201",
            "comuna_id" => 1101
        ],
        [
            "name" => "Centro Clínico Militar Iquique",
            "code" => "102209",
            "comuna_id" => 1101
        ],
        [
            "name" => "Centro Médico y Dental Megasalud Iquique",
            "code" => "102213",
            "comuna_id" => 1101
        ],
        [
            "name" => "Centro de Salud Mutual CChC Iquique",
            "code" => "102216",
            "comuna_id" => 1101
        ],
        [
            "name" => "Policlínico Naval de Iquique",
            "code" => "102217",
            "comuna_id" => 1101
        ],
        [
            "name" => "Policlínico FACH de Iquique",
            "code" => "102218",
            "comuna_id" => 1101
        ],
        [
            "name" => "Policlínico Carabineros de Iquique",
            "code" => "102219",
            "comuna_id" => 1101
        ],
        [
            "name" => "Clínica Coposa Cía. Minera Doña Inés de Collahuasi",
            "code" => "102220",
            "comuna_id" => 1405
        ],
        [
            "name" => "Clínica Establecimiento Penitenciario Alto Hospicio",
            "code" => "102221",
            "comuna_id" => 1107
        ],
        [
            "name" => "Centro de Atención Instituto de Seguridad del Trabajador Iquique",
            "code" => "102222",
            "comuna_id" => 1101
        ],
        [
            "name" => "Policlínico del Trabajador AChS Iquique",
            "code" => "102223",
            "comuna_id" => 1101
        ],
        [
            "name" => "Vacunatorio Sonrisa Infantil",
            "code" => "102224",
            "comuna_id" => 1101
        ],
        [
            "name" => "Centro Médico y Dental Megasalud Alto Hospicio",
            "code" => "102225",
            "comuna_id" => 1107
        ],
        [
            "name" => "Vacunatorio Vacumed",
            "code" => "102226",
            "comuna_id" => 1101
        ],
        [
            "name" => "Centro de Salud Universidad Arturo Prat",
            "code" => "102227",
            "comuna_id" => 1101
        ],
        [
            "name" => "Laboratorio Clínico Bionet",
            "code" => "102228",
            "comuna_id" => 1101
        ],
        [
            "name" => "Laboratorio Clínico Automatizado Elmo",
            "code" => "102229",
            "comuna_id" => 1101
        ],
        [
            "name" => "Laboratorio Clínico Automatizado Biogénesis",
            "code" => "102230",
            "comuna_id" => 1101
        ],
        [
            "name" => "Clinicum Laboratorio  Automatizado Ltda.",
            "code" => "102231",
            "comuna_id" => 1101
        ],
        [
            "name" => "Centro de Diálisis Medicen",
            "code" => "102232",
            "comuna_id" => 1101
        ],
        [
            "name" => "Centro de Diálisis Iquique",
            "code" => "102233",
            "comuna_id" => 1101
        ],
        [
            "name" => "Centro de Diálisis Corporación Paúl Harris",
            "code" => "102234",
            "comuna_id" => 1101
        ],
        [
            "name" => "Laboratorio Clínico Iquilab",
            "code" => "102235",
            "comuna_id" => 1101
        ],
        [
            "name" => "Laboratorio Clínico Playa Brava",
            "code" => "102236",
            "comuna_id" => 1101
        ],
        [
            "name" => "Laboratorio Clínico del Norte",
            "code" => "102237",
            "comuna_id" => 1107
        ],
        [
            "name" => "Laboratorio Clínico OASIS S.A.C.",
            "code" => "102238",
            "comuna_id" => 1101
        ],
        [
            "name" => "Laboratorio Clínico Wallace Ltda.",
            "code" => "102239",
            "comuna_id" => 1101
        ],
        [
            "name" => "Centro de Diálisis la Tirana",
            "code" => "102240",
            "comuna_id" => 1101
        ],
        [
            "name" => "Laboratorio Clínico Costanera",
            "code" => "102241",
            "comuna_id" => 1101
        ],
        [
            "name" => "Laboratorio Clínico Arauco Ltda.",
            "code" => "102242",
            "comuna_id" => 1101
        ],
        [
            "name" => "Centro de Salud Familiar Cirujano Aguirre",
            "code" => "102300",
            "comuna_id" => 1101
        ],
        [
            "name" => "Centro de Salud Familiar Cirujano Videla",
            "code" => "102301",
            "comuna_id" => 1101
        ],
        [
            "name" => "Centro de Salud Familiar Cirujano Guzmán",
            "code" => "102302",
            "comuna_id" => 1101
        ],
        [
            "name" => "Consultorio Pozo Almonte",
            "code" => "102303",
            "comuna_id" => 1401
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Juan Márquez Vismarra",
            "code" => "102304",
            "comuna_id" => 1405
        ],
        [
            "name" => "Consultorio Pedro Pulgar Melgarejo",
            "code" => "102305",
            "comuna_id" => 1107
        ],
        [
            "name" => "Centro de Salud Familiar Sur de Iquique",
            "code" => "102306",
            "comuna_id" => 1101
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Héctor Reyno Gutiérrez",
            "code" => "102307",
            "comuna_id" => 1107
        ],
        [
            "name" => "Consultorio General Rural Dr. Amador Neghme Rodríguez",
            "code" => "102308",
            "comuna_id" => 1404
        ],
        [
            "name" => "Consultorio General Rural Camiña",
            "code" => "102309",
            "comuna_id" => 1402
        ],
        [
            "name" => "Consultorio General Rural Colchane",
            "code" => "102310",
            "comuna_id" => 1403
        ],
        [
            "name" => "Posta de Salud Rural Pisagua",
            "code" => "102400",
            "comuna_id" => 1404
        ],
        [
            "name" => "Posta de Salud Rural Tarapacá",
            "code" => "102402",
            "comuna_id" => 1404
        ],
        [
            "name" => "Posta de Salud Rural Mamiña",
            "code" => "102403",
            "comuna_id" => 1401
        ],
        [
            "name" => "Posta de Salud Rural La Tirana",
            "code" => "102406",
            "comuna_id" => 1401
        ],
        [
            "name" => "Posta de Salud Rural Chiapa",
            "code" => "102407",
            "comuna_id" => 1404
        ],
        [
            "name" => "Posta de Salud Rural Moquella",
            "code" => "102408",
            "comuna_id" => 1402
        ],
        [
            "name" => "Posta de Salud Rural Enquelga",
            "code" => "102409",
            "comuna_id" => 1403
        ],
        [
            "name" => "Posta de Salud Rural Sibaya",
            "code" => "102410",
            "comuna_id" => 1404
        ],
        [
            "name" => "Posta de Salud Rural Cancosa",
            "code" => "102411",
            "comuna_id" => 1405
        ],
        [
            "name" => "Posta de Salud Rural Chanavayita",
            "code" => "102412",
            "comuna_id" => 1101
        ],
        [
            "name" => "Posta de Salud Rural San Marcos",
            "code" => "102413",
            "comuna_id" => 1101
        ],
        [
            "name" => "Posta de Salud Rural La Huayca",
            "code" => "102414",
            "comuna_id" => 1401
        ],
        [
            "name" => "Posta de Salud Rural Cariquima",
            "code" => "102415",
            "comuna_id" => 1403
        ],
        [
            "name" => "Posta de Salud Rural Matilla",
            "code" => "102416",
            "comuna_id" => 1405
        ],
        [
            "name" => "COSAM Dr. Jorge Seguel Cáceres",
            "code" => "102600",
            "comuna_id" => 1101
        ],
        [
            "name" => "COSAM Salvador Allende",
            "code" => "102601",
            "comuna_id" => 1101
        ],
        [
            "name" => "COSAM Enrique París",
            "code" => "102602",
            "comuna_id" => 1107
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Cerro Esmeralda",
            "code" => "102701",
            "comuna_id" => 1101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar El Boro",
            "code" => "102705",
            "comuna_id" => 1107
        ],
        [
            "name" => "SAPU-Cirujano Aguirre",
            "code" => "102800",
            "comuna_id" => 1101
        ],
        [
            "name" => "SAPU-Cirujano Videla",
            "code" => "102801",
            "comuna_id" => 1101
        ],
        [
            "name" => "SAPU-Cirujano Guzmán",
            "code" => "102802",
            "comuna_id" => 1101
        ],
        [
            "name" => "SAPU-Pozo Almonte",
            "code" => "102803",
            "comuna_id" => 1401
        ],
        [
            "name" => "SAPU-Pedro Pulgar Melgarejo",
            "code" => "102805",
            "comuna_id" => 1107
        ],
        [
            "name" => "SAPU-Sur de Iquique",
            "code" => "102806",
            "comuna_id" => 1101
        ],
        [
            "name" => "SAPU-El Boro",
            "code" => "102807",
            "comuna_id" => 1107
        ],
        [
            "name" => "Actividades Gestionadas por la Dirección del Servicio para apoyo de la Red (S.S de Antofagasta)",
            "code" => "103010",
            "comuna_id" => 2101
        ],
        [
            "name" => "PRAIS (S.S Antofagasta)",
            "code" => "103011",
            "comuna_id" => 2101
        ],
        [
            "name" => "Clínica Dental Móvil Simple. Pat. PW4072 (Antofagasta)",
            "code" => "103012",
            "comuna_id" => 2101
        ],
        [
            "name" => "Clínica Dental Móvil Triple. Pat. BBZV82 (Antofagasta)",
            "code" => "103013",
            "comuna_id" => 2101
        ],
        [
            "name" => "Hospital Dr. Leonardo Guzmán (Antofagasta)",
            "code" => "103100",
            "comuna_id" => 2101
        ],
        [
            "name" => "Hospital Dr. Carlos Cisternas (Calama)",
            "code" => "103101",
            "comuna_id" => 2201
        ],
        [
            "name" => "Hospital Dr. Marcos Macuada (Tocopilla)",
            "code" => "103102",
            "comuna_id" => 2301
        ],
        [
            "name" => "Hospital 21 de Mayo (Taltal)",
            "code" => "103103",
            "comuna_id" => 2104
        ],
        [
            "name" => "Hospital de Mejillones",
            "code" => "103104",
            "comuna_id" => 2102
        ],
        [
            "name" => "Centro Oncológico Ambulatorio",
            "code" => "103105",
            "comuna_id" => 2101
        ],
        [
            "name" => "Hospital Cruz del Norte",
            "code" => "103201",
            "comuna_id" => 2302
        ],
        [
            "name" => "Clínica Antofagasta",
            "code" => "103203",
            "comuna_id" => 2101
        ],
        [
            "name" => "Hospital Militar del Norte",
            "code" => "103210",
            "comuna_id" => 2101
        ],
        [
            "name" => "Clínica Mutual de Seguridad CChC de Calama",
            "code" => "103211",
            "comuna_id" => 2201
        ],
        [
            "name" => "Clínica Baquedano",
            "code" => "103212",
            "comuna_id" => 2101
        ],
        [
            "name" => "Clínica Urológica",
            "code" => "103214",
            "comuna_id" => 2101
        ],
        [
            "name" => "Clínica Oriente",
            "code" => "103215",
            "comuna_id" => 2101
        ],
        [
            "name" => "Clínica Mutual de Seguridad CChC Tocopilla",
            "code" => "103216",
            "comuna_id" => 2301
        ],
        [
            "name" => "Clínica El Loa",
            "code" => "103218",
            "comuna_id" => 2201
        ],
        [
            "name" => "Hospital del Cobre Salvador Allende",
            "code" => "103219",
            "comuna_id" => 2201
        ],
        [
            "name" => "Clínica La Portada",
            "code" => "103220",
            "comuna_id" => 2101
        ],
        [
            "name" => "Laboratorio Clínico Calama",
            "code" => "103221",
            "comuna_id" => 2201
        ],
        [
            "name" => "Clínica Oftalmológica (Mas Visión)",
            "code" => "103223",
            "comuna_id" => 2101
        ],
        [
            "name" => "Clínica Cumbres del Norte S.A.",
            "code" => "103224",
            "comuna_id" => 2101
        ],
        [
            "name" => "Centro Médico y Dental Megasalud Calama",
            "code" => "103226",
            "comuna_id" => 2201
        ],
        [
            "name" => "Centro Médico y Dental Megasalud Antofagasta",
            "code" => "103235",
            "comuna_id" => 2101
        ],
        [
            "name" => "Centro de Salud Mutual CChC Antofagasta",
            "code" => "103241",
            "comuna_id" => 2101
        ],
        [
            "name" => "Policlínico del Trabajador AChS Antofagasta",
            "code" => "103244",
            "comuna_id" => 2101
        ],
        [
            "name" => "Centro Médico Norte",
            "code" => "103245",
            "comuna_id" => 2101
        ],
        [
            "name" => "Consultorio Bautista",
            "code" => "103246",
            "comuna_id" => 2101
        ],
        [
            "name" => "Laboratorio Clínico Ehrlich",
            "code" => "103247",
            "comuna_id" => 2101
        ],
        [
            "name" => "Policlínico Mantos Blancos",
            "code" => "103248",
            "comuna_id" => 2101
        ],
        [
            "name" => "Centro de Salud Victoria Saravia Crespo",
            "code" => "103249",
            "comuna_id" => 2201
        ],
        [
            "name" => "Centro de Salud Aidoret Caro",
            "code" => "103250",
            "comuna_id" => 2201
        ],
        [
            "name" => "Centro de Salud Clinisan",
            "code" => "103251",
            "comuna_id" => 2101
        ],
        [
            "name" => "Centro de Salud Sanymed",
            "code" => "103252",
            "comuna_id" => 2101
        ],
        [
            "name" => "Clínica de la Familia El Loa",
            "code" => "103253",
            "comuna_id" => 2201
        ],
        [
            "name" => "Sociedad Diálisis Nordial Ltda.",
            "code" => "103254",
            "comuna_id" => 2101
        ],
        [
            "name" => "Centro Médico Dental Zona Antofagasta",
            "code" => "103255",
            "comuna_id" => 2101
        ],
        [
            "name" => "Consultorio Prefectura de El Loa",
            "code" => "103256",
            "comuna_id" => 2201
        ],
        [
            "name" => "Policlínico Instituto de Seguridad del Trabajo",
            "code" => "103257",
            "comuna_id" => 2101
        ],
        [
            "name" => "Laboratorio Diagnos",
            "code" => "103258",
            "comuna_id" => 2201
        ],
        [
            "name" => "Laboratorio High Clinic",
            "code" => "103259",
            "comuna_id" => 2201
        ],
        [
            "name" => "Laboratorio Tecmed Ltda.",
            "code" => "103260",
            "comuna_id" => 2201
        ],
        [
            "name" => "Laboratorio Histonor",
            "code" => "103261",
            "comuna_id" => 2101
        ],
        [
            "name" => "Laboratorio Diagnolab (Antofagasta)",
            "code" => "103262",
            "comuna_id" => 2101
        ],
        [
            "name" => "Laboratorio Luis Pasteur",
            "code" => "103263",
            "comuna_id" => 2101
        ],
        [
            "name" => "Laboratorio Bionet",
            "code" => "103264",
            "comuna_id" => 2101
        ],
        [
            "name" => "Laboratorio Clinilab (Antofagasta)",
            "code" => "103265",
            "comuna_id" => 2101
        ],
        [
            "name" => "Laboratorio Blanco",
            "code" => "103266",
            "comuna_id" => 2101
        ],
        [
            "name" => "Laboratorio Radiolab",
            "code" => "103267",
            "comuna_id" => 2101
        ],
        [
            "name" => "Doctor'Lab. Ltda.",
            "code" => "103268",
            "comuna_id" => 2101
        ],
        [
            "name" => "Centro de Diálisis Calama",
            "code" => "103269",
            "comuna_id" => 2201
        ],
        [
            "name" => "Clínica de Diálisis TECDIAL Ltda.",
            "code" => "103270",
            "comuna_id" => 2101
        ],
        [
            "name" => "Laboratorio clínico Labclin",
            "code" => "103271",
            "comuna_id" => 2101
        ],
        [
            "name" => "Laboratorio Dipreca",
            "code" => "103272",
            "comuna_id" => 2101
        ],
        [
            "name" => "Laboratorio Clínico Galeno",
            "code" => "103273",
            "comuna_id" => 2101
        ],
        [
            "name" => "Laboratorio Clínico Madison EIRL",
            "code" => "103274",
            "comuna_id" => 2101
        ],
        [
            "name" => "Laboratorio Clínico Salumed",
            "code" => "103275",
            "comuna_id" => 2201
        ],
        [
            "name" => "Laboratorio Clínico Diagnolab",
            "code" => "103276",
            "comuna_id" => 2201
        ],
        [
            "name" => "Laboratorio Clínico Blanco",
            "code" => "103277",
            "comuna_id" => 2201
        ],
        [
            "name" => "Laboratorio Clínico COMDES",
            "code" => "103278",
            "comuna_id" => 2201
        ],
        [
            "name" => "Laboratorio Sarita Núñez",
            "code" => "103279",
            "comuna_id" => 2101
        ],
        [
            "name" => "Centro de Salud Familiar Norte de Antofagasta",
            "code" => "103300",
            "comuna_id" => 2101
        ],
        [
            "name" => "Consultorio Antonio Rendic (Ex Cautín)",
            "code" => "103301",
            "comuna_id" => 2101
        ],
        [
            "name" => "Consultorio Corvallis",
            "code" => "103302",
            "comuna_id" => 2101
        ],
        [
            "name" => "Centro de Salud Familiar Centro Sur de Antofagasta",
            "code" => "103303",
            "comuna_id" => 2101
        ],
        [
            "name" => "Centro de Salud Familiar Juan Pablo II de Antofagasta",
            "code" => "103304",
            "comuna_id" => 2101
        ],
        [
            "name" => "Consultorio Central de Calama",
            "code" => "103305",
            "comuna_id" => 2201
        ],
        [
            "name" => "Centro de Salud Familiar Montt",
            "code" => "103306",
            "comuna_id" => 2201
        ],
        [
            "name" => "Consultorio Alemania de Calama",
            "code" => "103307",
            "comuna_id" => 2201
        ],
        [
            "name" => "Consultorio Central Oriente de Antofagasta",
            "code" => "103308",
            "comuna_id" => 2101
        ],
        [
            "name" => "Consultorio María Elena",
            "code" => "103309",
            "comuna_id" => 2302
        ],
        [
            "name" => "Consultorio San Pedro Atacama",
            "code" => "103311",
            "comuna_id" => 2203
        ],
        [
            "name" => "Centro de Salud Familiar Norponiente",
            "code" => "103312",
            "comuna_id" => 2201
        ],
        [
            "name" => "Centro Asistencial Norte",
            "code" => "103350",
            "comuna_id" => 2101
        ],
        [
            "name" => "Posta de Salud Rural Baquedano",
            "code" => "103400",
            "comuna_id" => 2103
        ],
        [
            "name" => "Posta de Salud Rural Sierra Gorda",
            "code" => "103401",
            "comuna_id" => 2103
        ],
        [
            "name" => "Posta de Salud Rural Toconao",
            "code" => "103403",
            "comuna_id" => 2203
        ],
        [
            "name" => "Posta de Salud Rural Peine",
            "code" => "103404",
            "comuna_id" => 2203
        ],
        [
            "name" => "Posta de Salud Rural Socaire",
            "code" => "103405",
            "comuna_id" => 2203
        ],
        [
            "name" => "Posta de Salud Rural Caspana",
            "code" => "103406",
            "comuna_id" => 2201
        ],
        [
            "name" => "Posta de Salud Rural Ollagüe",
            "code" => "103407",
            "comuna_id" => 2202
        ],
        [
            "name" => "Posta de Salud Rural Ayquina",
            "code" => "103409",
            "comuna_id" => 2201
        ],
        [
            "name" => "Posta de Salud Rural Chiu-Chiu",
            "code" => "103410",
            "comuna_id" => 2201
        ],
        [
            "name" => "Posta de Salud Rural Quillagua (María Elena)",
            "code" => "103411",
            "comuna_id" => 2302
        ],
        [
            "name" => "Posta de Salud Rural Paposo",
            "code" => "103413",
            "comuna_id" => 2104
        ],
        [
            "name" => "Estación de Salud Rural Río Grande",
            "code" => "103414",
            "comuna_id" => 2203
        ],
        [
            "name" => "COSAM Calama",
            "code" => "103601",
            "comuna_id" => 2201
        ],
        [
            "name" => "COSAM Sur de Antofagasta",
            "code" => "103602",
            "comuna_id" => 2101
        ],
        [
            "name" => "COSAM Central",
            "code" => "103603",
            "comuna_id" => 2101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Antofagasta",
            "code" => "103704",
            "comuna_id" => 2101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Sur",
            "code" => "103705",
            "comuna_id" => 2201
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Alemania",
            "code" => "103707",
            "comuna_id" => 2201
        ],
        [
            "name" => "SAPU-Norte de Antofagasta",
            "code" => "103800",
            "comuna_id" => 2101
        ],
        [
            "name" => "SAPU-Antonio Rendic",
            "code" => "103801",
            "comuna_id" => 2101
        ],
        [
            "name" => "SAPU-Corvallis",
            "code" => "103802",
            "comuna_id" => 2101
        ],
        [
            "name" => "SAPU-Juan Pablo II de Antofagasta",
            "code" => "103804",
            "comuna_id" => 2101
        ],
        [
            "name" => "SAPU-Enrique Montt",
            "code" => "103806",
            "comuna_id" => 2201
        ],
        [
            "name" => "SAPU-Alemania de Calama",
            "code" => "103807",
            "comuna_id" => 2201
        ],
        [
            "name" => "Actividades Gestionadas por la Dirección del Servicio para apoyo de la Red (S.S de Atacama)",
            "code" => "104010",
            "comuna_id" => 3101
        ],
        [
            "name" => "PRAIS (S.S Atacama)",
            "code" => "104011",
            "comuna_id" => 3101
        ],
        [
            "name" => "Clínica Dental Móvil Simple. Pat. PW4068 (Copiapo)",
            "code" => "104012",
            "comuna_id" => 3101
        ],
        [
            "name" => "Hospital San José del Carmen (Copiapó)",
            "code" => "104100",
            "comuna_id" => 3101
        ],
        [
            "name" => "Hospital Dr. Jerónimo Méndez Arancibia (Chañaral)",
            "code" => "104101",
            "comuna_id" => 3201
        ],
        [
            "name" => "Hospital Dr. Florencio Vargas (Diego de Almagro)",
            "code" => "104102",
            "comuna_id" => 3202
        ],
        [
            "name" => "Hospital Provincial del Huasco Monseñor Fernando Ariztía Ruiz (Vallenar)",
            "code" => "104103",
            "comuna_id" => 3301
        ],
        [
            "name" => "Hospital Dr. Manuel Magalhaes Medling (Huasco)",
            "code" => "104104",
            "comuna_id" => 3304
        ],
        [
            "name" => "Clínica San Lorenzo",
            "code" => "104200",
            "comuna_id" => 3202
        ],
        [
            "name" => "Centro de Salud del Trabajador AChS Copiapó",
            "code" => "104202",
            "comuna_id" => 3101
        ],
        [
            "name" => "Centro de Salud Mutual CChC Copiapó",
            "code" => "104203",
            "comuna_id" => 3101
        ],
        [
            "name" => "Clínica del Trabajador AChS Vallenar",
            "code" => "104214",
            "comuna_id" => 3301
        ],
        [
            "name" => "Universidad de Atacama",
            "code" => "104215",
            "comuna_id" => 3101
        ],
        [
            "name" => "Centro de Salud Compañía Acero del Pacifico",
            "code" => "104216",
            "comuna_id" => 3301
        ],
        [
            "name" => "Laboratorio Bio-Test",
            "code" => "104217",
            "comuna_id" => 3301
        ],
        [
            "name" => "Laboratorio Atacama",
            "code" => "104218",
            "comuna_id" => 3101
        ],
        [
            "name" => "Clínica Indire",
            "code" => "104238",
            "comuna_id" => 3101
        ],
        [
            "name" => "Centro de Salud CEDIMED",
            "code" => "104239",
            "comuna_id" => 3101
        ],
        [
            "name" => "Laboratorio Clínico Guillermo Guaita",
            "code" => "104241",
            "comuna_id" => 3101
        ],
        [
            "name" => "Laboratorio Clínico Huasco-Vallenar",
            "code" => "104242",
            "comuna_id" => 3301
        ],
        [
            "name" => "Laboratorio Clínico SIAC Copiapo",
            "code" => "104243",
            "comuna_id" => 3101
        ],
        [
            "name" => "Laboratorio Clínico Vallenar",
            "code" => "104244",
            "comuna_id" => 3301
        ],
        [
            "name" => "Laboratorio Clínico Bionet S.A.",
            "code" => "104245",
            "comuna_id" => 3101
        ],
        [
            "name" => "Laboratorio Clínico Diagnolab",
            "code" => "104246",
            "comuna_id" => 3101
        ],
        [
            "name" => "Laboratorio Clínico Examed",
            "code" => "104247",
            "comuna_id" => 3101
        ],
        [
            "name" => "Laboratorio Clínico Coprese",
            "code" => "104248",
            "comuna_id" => 3301
        ],
        [
            "name" => "Clínica Atacama S.A.",
            "code" => "104249",
            "comuna_id" => 3101
        ],
        [
            "name" => "Laboratorio Clinimed",
            "code" => "104250",
            "comuna_id" => 3101
        ],
        [
            "name" => "Centro Médico y Diagnóstico Atacama SPA",
            "code" => "104251",
            "comuna_id" => 3101
        ],
        [
            "name" => "Clínica Dial Vida",
            "code" => "104252",
            "comuna_id" => 3101
        ],
        [
            "name" => "Centro de Diálisis Nefrodial Atacama",
            "code" => "104253",
            "comuna_id" => 3101
        ],
        [
            "name" => "Centro de Diálisis Curanilahue",
            "code" => "104254",
            "comuna_id" => 3101
        ],
        [
            "name" => "Centro de Diálisis Vallenar",
            "code" => "104255",
            "comuna_id" => 3301
        ],
        [
            "name" => "Centro de Diálisis Renacer del Valle",
            "code" => "104256",
            "comuna_id" => 3301
        ],
        [
            "name" => "Centro de Salud Familiar Santa Elvira",
            "code" => "104300",
            "comuna_id" => 3101
        ],
        [
            "name" => "Centro de Salud Familiar Rosario Corvalán",
            "code" => "104301",
            "comuna_id" => 3102
        ],
        [
            "name" => "Centro de Salud Familiar Juan Martínez",
            "code" => "104302",
            "comuna_id" => 3101
        ],
        [
            "name" => "Centro de Salud Familiar Pedro León Gallo",
            "code" => "104303",
            "comuna_id" => 3101
        ],
        [
            "name" => "Centro de Salud Familiar Rosario-Palomar",
            "code" => "104304",
            "comuna_id" => 3101
        ],
        [
            "name" => "Centro de Salud FamiliarCandelaria Rosario",
            "code" => "104305",
            "comuna_id" => 3101
        ],
        [
            "name" => "Centro de Salud Familiar Manuel Rodríguez",
            "code" => "104306",
            "comuna_id" => 3101
        ],
        [
            "name" => "Centro de Salud Familiar Paipote",
            "code" => "104307",
            "comuna_id" => 3101
        ],
        [
            "name" => "Centro de Salud Salvador Allende Gossens",
            "code" => "104308",
            "comuna_id" => 3103
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Luis Herrera",
            "code" => "104309",
            "comuna_id" => 3201
        ],
        [
            "name" => "Consultorio El Salvador",
            "code" => "104311",
            "comuna_id" => 3202
        ],
        [
            "name" => "Centro de Salud Familiar Estación",
            "code" => "104313",
            "comuna_id" => 3301
        ],
        [
            "name" => "Centro de Salud Familiar Freirina",
            "code" => "104314",
            "comuna_id" => 3303
        ],
        [
            "name" => "Centro de Salud Familiar Hermanos Carrera",
            "code" => "104315",
            "comuna_id" => 3301
        ],
        [
            "name" => "Centro de Salud Familiar Baquedano",
            "code" => "104316",
            "comuna_id" => 3301
        ],
        [
            "name" => "Centro de Salud Familiar Joan Crawford Astudillo",
            "code" => "104317",
            "comuna_id" => 3301
        ],
        [
            "name" => "Consultorio Juan Verdaguer",
            "code" => "104319",
            "comuna_id" => 3304
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Bernardo Mellibovsky",
            "code" => "104321",
            "comuna_id" => 3101
        ],
        [
            "name" => "Centro de Salud FamiliarAlto del Carmen",
            "code" => "104322",
            "comuna_id" => 3302
        ],
        [
            "name" => "Posta de Salud Rural Los Loros",
            "code" => "104400",
            "comuna_id" => 3103
        ],
        [
            "name" => "Posta de Salud Rural El Salado de Chañaral",
            "code" => "104401",
            "comuna_id" => 3201
        ],
        [
            "name" => "Posta de Salud Rural Inca de Oro",
            "code" => "104402",
            "comuna_id" => 3202
        ],
        [
            "name" => "Posta de Salud Rural San Félix",
            "code" => "104403",
            "comuna_id" => 3302
        ],
        [
            "name" => "Posta de Salud Rural El Tránsito",
            "code" => "104404",
            "comuna_id" => 3302
        ],
        [
            "name" => "Posta de Salud Rural Domeyko",
            "code" => "104405",
            "comuna_id" => 3301
        ],
        [
            "name" => "Posta de Salud Rural Conay",
            "code" => "104407",
            "comuna_id" => 3302
        ],
        [
            "name" => "Posta de Salud Rural Hacienda Ventanas",
            "code" => "104408",
            "comuna_id" => 3301
        ],
        [
            "name" => "Posta de Salud Rural Carrizalillo (Freirina)",
            "code" => "104409",
            "comuna_id" => 3303
        ],
        [
            "name" => "Posta de Salud Rural Cachiyuyo",
            "code" => "104410",
            "comuna_id" => 3301
        ],
        [
            "name" => "Posta de Salud Rural Incahuasi",
            "code" => "104411",
            "comuna_id" => 3301
        ],
        [
            "name" => "Posta de Salud Rural Hacienda Compañía",
            "code" => "104412",
            "comuna_id" => 3301
        ],
        [
            "name" => "Posta de Salud Rural Segundo Ponce",
            "code" => "104413",
            "comuna_id" => 3304
        ],
        [
            "name" => "Posta de Salud Rural Las Breas (Alto del Carmen)",
            "code" => "104414",
            "comuna_id" => 3302
        ],
        [
            "name" => "Posta de Salud Rural Padre Mariano Avellana Lasierra",
            "code" => "104415",
            "comuna_id" => 3304
        ],
        [
            "name" => "Posta de Salud Rural Jeremías Cortés",
            "code" => "104416",
            "comuna_id" => 3304
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Orfelia Lavín",
            "code" => "104701",
            "comuna_id" => 3102
        ],
        [
            "name" => "Actividades Gestionadas por la Dirección del Servicio para apoyo de la Red (S.S de Coquimbo)",
            "code" => "105010",
            "comuna_id" => 4101
        ],
        [
            "name" => "PRAIS (S.S Coquimbo)",
            "code" => "105011",
            "comuna_id" => 4101
        ],
        [
            "name" => "Clínica Dental Móvil Triple. Pat. PW4100 (Monte Patria)",
            "code" => "105012",
            "comuna_id" => 4303
        ],
        [
            "name" => "Hospital San Juan de Dios (La Serena)",
            "code" => "105100",
            "comuna_id" => 4101
        ],
        [
            "name" => "Hospital San Pablo (Coquimbo)",
            "code" => "105101",
            "comuna_id" => 4102
        ],
        [
            "name" => "Hospital Dr. Antonio Tirado Lanas (Ovalle)",
            "code" => "105102",
            "comuna_id" => 4301
        ],
        [
            "name" => "Hospital Dr. Humberto Elorza Cortés (Illapel)",
            "code" => "105103",
            "comuna_id" => 4201
        ],
        [
            "name" => "Hospital de Salamanca",
            "code" => "105104",
            "comuna_id" => 4204
        ],
        [
            "name" => "Hospital San Juan de Dios (Combarbalá)",
            "code" => "105105",
            "comuna_id" => 4302
        ],
        [
            "name" => "Hospital Dr. José Arraño (Andacollo)",
            "code" => "105106",
            "comuna_id" => 4103
        ],
        [
            "name" => "Hospital San Juan de Dios (Vicuña)",
            "code" => "105107",
            "comuna_id" => 4106
        ],
        [
            "name" => "Hospital San Pedro (Los Vilos)",
            "code" => "105108",
            "comuna_id" => 4203
        ],
        [
            "name" => "Centro de Salud Mutual CChC La Serena",
            "code" => "105202",
            "comuna_id" => 4101
        ],
        [
            "name" => "Policlínico del Trabajador AChS La Serena",
            "code" => "105203",
            "comuna_id" => 4101
        ],
        [
            "name" => "Clínica del Trabajador de la AChS Ovalle",
            "code" => "105207",
            "comuna_id" => 4301
        ],
        [
            "name" => "Clínica Regional Elqui",
            "code" => "105208",
            "comuna_id" => 4101
        ],
        [
            "name" => "Centro Médico Integramédica La Serena",
            "code" => "105225",
            "comuna_id" => 4101
        ],
        [
            "name" => "Centro Médico y Dental Megasalud La Serena",
            "code" => "105230",
            "comuna_id" => 4101
        ],
        [
            "name" => "Laboratorio Clínico Dra. Gloria Canovas",
            "code" => "105231",
            "comuna_id" => 4101
        ],
        [
            "name" => "Policlínico Cruz Roja de La Serena",
            "code" => "105232",
            "comuna_id" => 4101
        ],
        [
            "name" => "Centro de Salud Estudiantil (Universidad Católica del Norte)",
            "code" => "105233",
            "comuna_id" => 4102
        ],
        [
            "name" => "Policlínico del Trabajador AChS Illapel",
            "code" => "105234",
            "comuna_id" => 4201
        ],
        [
            "name" => "Sociedad Médica Peñuelas Ltda.",
            "code" => "105235",
            "comuna_id" => 4102
        ],
        [
            "name" => "Sociedad de Profesionales de Hemodiálisis Ltda.",
            "code" => "105236",
            "comuna_id" => 4101
        ],
        [
            "name" => "Sociedad Propedia Ltda.",
            "code" => "105237",
            "comuna_id" => 4102
        ],
        [
            "name" => "Vacunatorio La Serena",
            "code" => "105238",
            "comuna_id" => 4101
        ],
        [
            "name" => "Compañía Minera del Pacífico S.A.",
            "code" => "105239",
            "comuna_id" => 4101
        ],
        [
            "name" => "Centro de Salud Mutual CChC Ovalle",
            "code" => "105240",
            "comuna_id" => 4301
        ],
        [
            "name" => "Cruz Roja de Coquimbo",
            "code" => "105241",
            "comuna_id" => 4102
        ],
        [
            "name" => "Laboratorio Clínico Santa María de La Serena Ltda.",
            "code" => "105242",
            "comuna_id" => 4101
        ],
        [
            "name" => "Laboratorio Clínico Limarí",
            "code" => "105243",
            "comuna_id" => 4301
        ],
        [
            "name" => "Laboratorio Clínico Integramédica",
            "code" => "105244",
            "comuna_id" => 4101
        ],
        [
            "name" => "Laboratorio Clínico San Andrés",
            "code" => "105245",
            "comuna_id" => 4301
        ],
        [
            "name" => "Centro de especialidades Médicas (CEMCO)",
            "code" => "105246",
            "comuna_id" => 4102
        ],
        [
            "name" => "Laboratorio Clínico Analyser Ltda.",
            "code" => "105247",
            "comuna_id" => 4101
        ],
        [
            "name" => "Laboratorio Clínico Ariztía Ltda.",
            "code" => "105248",
            "comuna_id" => 4301
        ],
        [
            "name" => "Laboratorio Clínico Bionet S.A",
            "code" => "105249",
            "comuna_id" => 4101
        ],
        [
            "name" => "Sociedad de Profesionales de Huanhuali Ltda.",
            "code" => "105250",
            "comuna_id" => 4101
        ],
        [
            "name" => "Laboratorio Clínico IMATEC Ltda.",
            "code" => "105251",
            "comuna_id" => 4101
        ],
        [
            "name" => "Laboratorio Clínico Hermanos Muñoz Flores",
            "code" => "105252",
            "comuna_id" => 4102
        ],
        [
            "name" => "Laboratorio Clínico Xima Ltda.",
            "code" => "105253",
            "comuna_id" => 4102
        ],
        [
            "name" => "Laboratorio clínico Hemolab Ltda.",
            "code" => "105254",
            "comuna_id" => 4102
        ],
        [
            "name" => "Laboratorio Clínico los Olivos",
            "code" => "105255",
            "comuna_id" => 4102
        ],
        [
            "name" => "Laboratorio Clínico Zuleta y Pinto",
            "code" => "105256",
            "comuna_id" => 4106
        ],
        [
            "name" => "Laboratorio Clínico Bionet S.A",
            "code" => "105257",
            "comuna_id" => 4201
        ],
        [
            "name" => "Laboratorio Clínico Astelab",
            "code" => "105258",
            "comuna_id" => 4204
        ],
        [
            "name" => "Laboratorio Clínico Bionet S.A",
            "code" => "105259",
            "comuna_id" => 4301
        ],
        [
            "name" => "Laboratorio Clínico Medilab Ltda.",
            "code" => "105260",
            "comuna_id" => 4301
        ],
        [
            "name" => "Laboratorio Clínico Arauco",
            "code" => "105261",
            "comuna_id" => 4102
        ],
        [
            "name" => "Clínica Regional Coquimbo",
            "code" => "105262",
            "comuna_id" => 4102
        ],
        [
            "name" => "Centro de Salud Familiar Cardenal Caro",
            "code" => "105300",
            "comuna_id" => 4101
        ],
        [
            "name" => "Centro de Salud Familiar Las Compañías",
            "code" => "105301",
            "comuna_id" => 4101
        ],
        [
            "name" => "Centro de Salud Familiar Pedro Aguirre Cerda",
            "code" => "105302",
            "comuna_id" => 4101
        ],
        [
            "name" => "Centro de Salud Familiar San Juan",
            "code" => "105303",
            "comuna_id" => 4102
        ],
        [
            "name" => "Centro de Salud Familiar Santa Cecilia",
            "code" => "105304",
            "comuna_id" => 4102
        ],
        [
            "name" => "Centro de Salud Familiar Tierras Blancas",
            "code" => "105305",
            "comuna_id" => 4102
        ],
        [
            "name" => "Consultorio Paiguano",
            "code" => "105306",
            "comuna_id" => 4105
        ],
        [
            "name" => "Consultorio Monte Patria",
            "code" => "105307",
            "comuna_id" => 4303
        ],
        [
            "name" => "Consultorio Punitaqui",
            "code" => "105308",
            "comuna_id" => 4304
        ],
        [
            "name" => "Consultorio Canela",
            "code" => "105309",
            "comuna_id" => 4202
        ],
        [
            "name" => "Consultorio Pichasca",
            "code" => "105310",
            "comuna_id" => 4305
        ],
        [
            "name" => "Consultorio Chañaral Alto",
            "code" => "105311",
            "comuna_id" => 4303
        ],
        [
            "name" => "Consultorio Carén",
            "code" => "105312",
            "comuna_id" => 4303
        ],
        [
            "name" => "Consultorio Emilio Schaffhauser",
            "code" => "105313",
            "comuna_id" => 4101
        ],
        [
            "name" => "Consultorio La Higuera",
            "code" => "105314",
            "comuna_id" => 4104
        ],
        [
            "name" => "Consultorio Cerrillos Tamaya",
            "code" => "105315",
            "comuna_id" => 4301
        ],
        [
            "name" => "Centro de Salud Familiar Jorge Jordán Domic",
            "code" => "105317",
            "comuna_id" => 4301
        ],
        [
            "name" => "Consultorio El Palqui",
            "code" => "105318",
            "comuna_id" => 4303
        ],
        [
            "name" => "Centro de Salud Familiar Cardenal Raúl Silva Henríquez de La Serena",
            "code" => "105319",
            "comuna_id" => 4101
        ],
        [
            "name" => "Consultorio Tongoy",
            "code" => "105321",
            "comuna_id" => 4102
        ],
        [
            "name" => "Centro de Salud Familiar Marcos Macuada",
            "code" => "105322",
            "comuna_id" => 4301
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Sergio Aguilar Delgado",
            "code" => "105323",
            "comuna_id" => 4102
        ],
        [
            "name" => "Centro de Salud Familiar Sotaquí",
            "code" => "105324",
            "comuna_id" => 4301
        ],
        [
            "name" => "Centro de Salud Familiar Juan Pablo II",
            "code" => "105325",
            "comuna_id" => 4101
        ],
        [
            "name" => "Centro de Salud Familiar Villa San Rafael de Rozas",
            "code" => "105326",
            "comuna_id" => 4201
        ],
        [
            "name" => "Posta de Salud Rural Algarrobito",
            "code" => "105400",
            "comuna_id" => 4101
        ],
        [
            "name" => "Posta de Salud Rural Las Rojas",
            "code" => "105401",
            "comuna_id" => 4101
        ],
        [
            "name" => "Posta de Salud Rural El Romero",
            "code" => "105402",
            "comuna_id" => 4101
        ],
        [
            "name" => "Posta de Salud Rural El Tangue",
            "code" => "105404",
            "comuna_id" => 4102
        ],
        [
            "name" => "Posta de Salud Rural Guanaqueros",
            "code" => "105405",
            "comuna_id" => 4102
        ],
        [
            "name" => "Posta de Salud Rural Pan de Azúcar",
            "code" => "105406",
            "comuna_id" => 4102
        ],
        [
            "name" => "Posta de Salud Rural Tambillo",
            "code" => "105407",
            "comuna_id" => 4102
        ],
        [
            "name" => "Posta de Salud Rural El Chañar",
            "code" => "105409",
            "comuna_id" => 4305
        ],
        [
            "name" => "Posta de Salud Rural Hurtado",
            "code" => "105410",
            "comuna_id" => 4305
        ],
        [
            "name" => "Posta de Salud Rural Las Breas (Río Hurtado)",
            "code" => "105411",
            "comuna_id" => 4305
        ],
        [
            "name" => "Posta de Salud Rural Samo Alto",
            "code" => "105413",
            "comuna_id" => 4305
        ],
        [
            "name" => "Posta de Salud Rural Serón",
            "code" => "105414",
            "comuna_id" => 4305
        ],
        [
            "name" => "Posta de Salud Rural Barraza",
            "code" => "105415",
            "comuna_id" => 4301
        ],
        [
            "name" => "Posta de Salud Rural Camarico (Ovalle)",
            "code" => "105416",
            "comuna_id" => 4301
        ],
        [
            "name" => "Posta de Salud Rural Alcones Bajo",
            "code" => "105417",
            "comuna_id" => 4301
        ],
        [
            "name" => "Posta de Salud Rural Las Sossas",
            "code" => "105419",
            "comuna_id" => 4301
        ],
        [
            "name" => "Posta de Salud Rural Limarí",
            "code" => "105420",
            "comuna_id" => 4301
        ],
        [
            "name" => "Posta de Salud Rural Hornillos",
            "code" => "105422",
            "comuna_id" => 4301
        ],
        [
            "name" => "Posta de Salud Rural Chilecito",
            "code" => "105425",
            "comuna_id" => 4303
        ],
        [
            "name" => "Posta de Salud Rural Hacienda Valdivia",
            "code" => "105427",
            "comuna_id" => 4303
        ],
        [
            "name" => "Posta de Salud Rural Huatulame",
            "code" => "105428",
            "comuna_id" => 4303
        ],
        [
            "name" => "Posta de Salud Rural Mialqui",
            "code" => "105430",
            "comuna_id" => 4303
        ],
        [
            "name" => "Posta de Salud Rural Pedregal",
            "code" => "105431",
            "comuna_id" => 4303
        ],
        [
            "name" => "Posta de Salud Rural Rapel (Monte Patria)",
            "code" => "105432",
            "comuna_id" => 4303
        ],
        [
            "name" => "Posta de Salud Rural San Lorenzo (Combarbalá)",
            "code" => "105433",
            "comuna_id" => 4302
        ],
        [
            "name" => "Posta de Salud Rural San Marcos (Combarbalá)",
            "code" => "105434",
            "comuna_id" => 4302
        ],
        [
            "name" => "Posta de Salud Rural Tulahuén",
            "code" => "105435",
            "comuna_id" => 4303
        ],
        [
            "name" => "Posta de Salud Rural El Maitén",
            "code" => "105436",
            "comuna_id" => 4303
        ],
        [
            "name" => "Posta de Salud Rural Chalinga",
            "code" => "105437",
            "comuna_id" => 4301
        ],
        [
            "name" => "Posta de Salud Rural Cerro Blanco",
            "code" => "105439",
            "comuna_id" => 4301
        ],
        [
            "name" => "Posta de Salud Rural Divisadero",
            "code" => "105440",
            "comuna_id" => 4304
        ],
        [
            "name" => "Posta de Salud Rural Manquehua",
            "code" => "105441",
            "comuna_id" => 4302
        ],
        [
            "name" => "Posta de Salud Rural San Pedro de Quiles",
            "code" => "105442",
            "comuna_id" => 4304
        ],
        [
            "name" => "Posta de Salud Rural Cárcamo",
            "code" => "105443",
            "comuna_id" => 4201
        ],
        [
            "name" => "Posta de Salud Rural Huintil",
            "code" => "105444",
            "comuna_id" => 4201
        ],
        [
            "name" => "Posta de Salud Rural Limáhuida",
            "code" => "105445",
            "comuna_id" => 4201
        ],
        [
            "name" => "Posta de Salud Rural Matancilla",
            "code" => "105446",
            "comuna_id" => 4201
        ],
        [
            "name" => "Posta de Salud Rural Peralillo Illapel",
            "code" => "105447",
            "comuna_id" => 4201
        ],
        [
            "name" => "Posta de Salud Rural Santa Virginia",
            "code" => "105448",
            "comuna_id" => 4201
        ],
        [
            "name" => "Posta de Salud Rural Tunga Norte",
            "code" => "105449",
            "comuna_id" => 4201
        ],
        [
            "name" => "Posta de Salud Rural Mincha Norte",
            "code" => "105450",
            "comuna_id" => 4202
        ],
        [
            "name" => "Posta de Salud Rural Agua Fría",
            "code" => "105451",
            "comuna_id" => 4202
        ],
        [
            "name" => "Posta de Salud Rural Cuncumén(Salamanca)",
            "code" => "105452",
            "comuna_id" => 4204
        ],
        [
            "name" => "Posta de Salud Rural Tranquilla",
            "code" => "105453",
            "comuna_id" => 4204
        ],
        [
            "name" => "Posta de Salud Rural Cunlagua",
            "code" => "105454",
            "comuna_id" => 4204
        ],
        [
            "name" => "Posta de Salud Rural Chillepín",
            "code" => "105455",
            "comuna_id" => 4204
        ],
        [
            "name" => "Posta de Salud Rural Llimpo",
            "code" => "105456",
            "comuna_id" => 4204
        ],
        [
            "name" => "Posta de Salud Rural San Agustín (Salamanca)",
            "code" => "105457",
            "comuna_id" => 4204
        ],
        [
            "name" => "Posta de Salud Rural Tahuinco",
            "code" => "105458",
            "comuna_id" => 4204
        ],
        [
            "name" => "Posta de Salud Rural Barrancas",
            "code" => "105459",
            "comuna_id" => 4302
        ],
        [
            "name" => "Posta de Salud Rural Cogotí 18",
            "code" => "105460",
            "comuna_id" => 4302
        ],
        [
            "name" => "Posta de Salud Rural El Huacho",
            "code" => "105461",
            "comuna_id" => 4302
        ],
        [
            "name" => "Posta de Salud Rural El Sauce (Combarbalá)",
            "code" => "105462",
            "comuna_id" => 4302
        ],
        [
            "name" => "Posta de Salud Rural Quilitapia",
            "code" => "105463",
            "comuna_id" => 4302
        ],
        [
            "name" => "Posta de Salud Rural La Ligua",
            "code" => "105464",
            "comuna_id" => 4302
        ],
        [
            "name" => "Posta de Salud Rural Ramadilla",
            "code" => "105465",
            "comuna_id" => 4302
        ],
        [
            "name" => "Posta de Salud Rural Valle Hermoso",
            "code" => "105466",
            "comuna_id" => 4302
        ],
        [
            "name" => "Posta de Salud Rural Diaguitas",
            "code" => "105467",
            "comuna_id" => 4106
        ],
        [
            "name" => "Posta de Salud Rural El Molle",
            "code" => "105468",
            "comuna_id" => 4106
        ],
        [
            "name" => "Posta de Salud Rural El Tambo (Vicuña)",
            "code" => "105469",
            "comuna_id" => 4106
        ],
        [
            "name" => "Posta de Salud Rural Huanta",
            "code" => "105470",
            "comuna_id" => 4106
        ],
        [
            "name" => "Posta de Salud Rural Peralillo Vicuña",
            "code" => "105471",
            "comuna_id" => 4106
        ],
        [
            "name" => "Posta de Salud Rural Rivadavia",
            "code" => "105472",
            "comuna_id" => 4106
        ],
        [
            "name" => "Posta de Salud Rural Talcuna",
            "code" => "105473",
            "comuna_id" => 4106
        ],
        [
            "name" => "Posta de Salud Rural Chapilca",
            "code" => "105474",
            "comuna_id" => 4106
        ],
        [
            "name" => "Posta de Salud Rural Horcón (Paiguano)",
            "code" => "105475",
            "comuna_id" => 4105
        ],
        [
            "name" => "Posta de Salud Rural Monte Grande",
            "code" => "105476",
            "comuna_id" => 4105
        ],
        [
            "name" => "Posta de Salud Rural Pisco Elqui",
            "code" => "105477",
            "comuna_id" => 4105
        ],
        [
            "name" => "Posta de Salud Rural Caimanes",
            "code" => "105478",
            "comuna_id" => 4203
        ],
        [
            "name" => "Posta de Salud Rural Guangualí",
            "code" => "105479",
            "comuna_id" => 4203
        ],
        [
            "name" => "Posta de Salud Rural Quilimarí",
            "code" => "105480",
            "comuna_id" => 4203
        ],
        [
            "name" => "Posta de Salud Rural Tilama",
            "code" => "105481",
            "comuna_id" => 4203
        ],
        [
            "name" => "Posta de Salud Rural Canela Alta",
            "code" => "105482",
            "comuna_id" => 4202
        ],
        [
            "name" => "Posta de Salud Rural Los Rulos",
            "code" => "105483",
            "comuna_id" => 4202
        ],
        [
            "name" => "Posta de Salud Rural Huentelauquén",
            "code" => "105484",
            "comuna_id" => 4202
        ],
        [
            "name" => "Posta de Salud Rural Plan de Hornos",
            "code" => "105485",
            "comuna_id" => 4201
        ],
        [
            "name" => "Posta de Salud Rural Tunga Sur",
            "code" => "105486",
            "comuna_id" => 4201
        ],
        [
            "name" => "Posta de Salud Rural Cañas Uno",
            "code" => "105487",
            "comuna_id" => 4201
        ],
        [
            "name" => "Posta de Salud Rural Espíritu Santo",
            "code" => "105488",
            "comuna_id" => 4202
        ],
        [
            "name" => "Posta de Salud Rural Ramadas de Tulahuén",
            "code" => "105489",
            "comuna_id" => 4303
        ],
        [
            "name" => "Posta de Salud Rural El Durazno(Combarbalá)",
            "code" => "105490",
            "comuna_id" => 4302
        ],
        [
            "name" => "Posta de Salud Rural Quelén Bajo",
            "code" => "105491",
            "comuna_id" => 4204
        ],
        [
            "name" => "Posta de Salud Rural Camisa",
            "code" => "105492",
            "comuna_id" => 4204
        ],
        [
            "name" => "Posta de Salud Rural Mincha Sur",
            "code" => "105493",
            "comuna_id" => 4202
        ],
        [
            "name" => "Posta de Salud Rural Pintacura Sur",
            "code" => "105496",
            "comuna_id" => 4201
        ],
        [
            "name" => "Posta de Salud Rural Jabonería",
            "code" => "105497",
            "comuna_id" => 4202
        ],
        [
            "name" => "Posta de Salud Rural Quebrada Linares",
            "code" => "105498",
            "comuna_id" => 4202
        ],
        [
            "name" => "Posta de Salud Rural Lambert",
            "code" => "105499",
            "comuna_id" => 4101
        ],
        [
            "name" => "Posta de Salud Rural Caleta Hornos",
            "code" => "105500",
            "comuna_id" => 4104
        ],
        [
            "name" => "Posta de Salud Rural Arboleda Grande",
            "code" => "105501",
            "comuna_id" => 4204
        ],
        [
            "name" => "Posta de Salud Rural Calingasta",
            "code" => "105502",
            "comuna_id" => 4106
        ],
        [
            "name" => "Posta de Salud Rural Tabaqueros",
            "code" => "105503",
            "comuna_id" => 4305
        ],
        [
            "name" => "Posta de Salud Rural Socavón",
            "code" => "105504",
            "comuna_id" => 4201
        ],
        [
            "name" => "Posta de Salud Rural Los Choros",
            "code" => "105505",
            "comuna_id" => 4104
        ],
        [
            "name" => "Posta de Salud Rural El Trapiche",
            "code" => "105506",
            "comuna_id" => 4104
        ],
        [
            "name" => "Posta de Salud Rural Huamalata",
            "code" => "105507",
            "comuna_id" => 4301
        ],
        [
            "name" => "Posta de Salud Rural El Parral de Quiles",
            "code" => "105508",
            "comuna_id" => 4304
        ],
        [
            "name" => "Posta de Salud Rural Gualliguaica",
            "code" => "105509",
            "comuna_id" => 4106
        ],
        [
            "name" => "Posta de Salud Rural Recoleta",
            "code" => "105510",
            "comuna_id" => 4301
        ],
        [
            "name" => "Posta de Salud Rural Los Cóndores",
            "code" => "105511",
            "comuna_id" => 4203
        ],
        [
            "name" => "COSAM Tierras Blancas (CESAM)",
            "code" => "105600",
            "comuna_id" => 4102
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Villa el Indio",
            "code" => "105700",
            "comuna_id" => 4101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Villa Alemania",
            "code" => "105701",
            "comuna_id" => 4101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Lambert",
            "code" => "105702",
            "comuna_id" => 4101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar El Alba",
            "code" => "105705",
            "comuna_id" => 4102
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar San José de la Dehesa",
            "code" => "105722",
            "comuna_id" => 4301
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Limarí",
            "code" => "105723",
            "comuna_id" => 4301
        ],
        [
            "name" => "SAPU-Las Compañías",
            "code" => "105801",
            "comuna_id" => 4101
        ],
        [
            "name" => "SAPU-Pedro Aguirre Cerda",
            "code" => "105802",
            "comuna_id" => 4101
        ],
        [
            "name" => "SAPU-San Juan",
            "code" => "105803",
            "comuna_id" => 4102
        ],
        [
            "name" => "SAPU-Santa Cecilia",
            "code" => "105804",
            "comuna_id" => 4102
        ],
        [
            "name" => "SAPU-Tierras Blancas",
            "code" => "105805",
            "comuna_id" => 4102
        ],
        [
            "name" => "SAPU-Canela",
            "code" => "105809",
            "comuna_id" => 4202
        ],
        [
            "name" => "SAPU-Jorge Jordán Domic",
            "code" => "105817",
            "comuna_id" => 4301
        ],
        [
            "name" => "SAPU-Raúl Silva Henríquez de La Serena",
            "code" => "105819",
            "comuna_id" => 4101
        ],
        [
            "name" => "SAPU-Marcos Macuada",
            "code" => "105822",
            "comuna_id" => 4301
        ],
        [
            "name" => "SAPU-Dr. Sergio Aguilar",
            "code" => "105823",
            "comuna_id" => 4102
        ],
        [
            "name" => "SAPU-Cardenal Caro",
            "code" => "105825",
            "comuna_id" => 4101
        ],
        [
            "name" => "SAPU-Emilio Schaffhauser",
            "code" => "105826",
            "comuna_id" => 4101
        ],
        [
            "name" => "Actividades Gestionadas por la Dirección del Servicio para apoyo de la Red (S.S de Valparaíso-San Antonio)",
            "code" => "106010",
            "comuna_id" => 5101
        ],
        [
            "name" => "PRAIS (S.S Valparaíso San Antonio)",
            "code" => "106011",
            "comuna_id" => 5101
        ],
        [
            "name" => "Clínica Dental Móvil Triple. Pat. PW4101 (Valparaíso)",
            "code" => "106012",
            "comuna_id" => 5101
        ],
        [
            "name" => "Vacunatorio SEREMI de Salud de Valparaíso",
            "code" => "106095",
            "comuna_id" => 5101
        ],
        [
            "name" => "Hospital Carlos Van Buren (Valparaíso)",
            "code" => "106100",
            "comuna_id" => 5101
        ],
        [
            "name" => "Hospital Dr. Eduardo Pereira Ramírez (Valparaíso)",
            "code" => "106102",
            "comuna_id" => 5101
        ],
        [
            "name" => "Hospital Claudio Vicuña ( San Antonio)",
            "code" => "106103",
            "comuna_id" => 5601
        ],
        [
            "name" => "Hospital Del Salvador (Valparaíso)",
            "code" => "106104",
            "comuna_id" => 5101
        ],
        [
            "name" => "Hospital San José (Casablanca)",
            "code" => "106105",
            "comuna_id" => 5102
        ],
        [
            "name" => "Centro de Sangre y Tejidos IV y V Región",
            "code" => "106150",
            "comuna_id" => 5101
        ],
        [
            "name" => "Centro de Referencia de Salud Odontológica",
            "code" => "106151",
            "comuna_id" => 5101
        ],
        [
            "name" => "Clínica San Julián",
            "code" => "106204",
            "comuna_id" => 5601
        ],
        [
            "name" => "Clínica San Antonio",
            "code" => "106205",
            "comuna_id" => 5601
        ],
        [
            "name" => "Centro CONIN Valparaíso",
            "code" => "106207",
            "comuna_id" => 5101
        ],
        [
            "name" => "Complejo Penitenciario",
            "code" => "106213",
            "comuna_id" => 5101
        ],
        [
            "name" => "Clínica Valparaíso",
            "code" => "106214",
            "comuna_id" => 5101
        ],
        [
            "name" => "Centro de Salud Mutual CChC San Antonio",
            "code" => "106234",
            "comuna_id" => 5601
        ],
        [
            "name" => "Centro Médico y Dental Valparaíso Capredena",
            "code" => "106236",
            "comuna_id" => 5101
        ],
        [
            "name" => "Clínica de la Agrupación Médica Americana",
            "code" => "106237",
            "comuna_id" => 5101
        ],
        [
            "name" => "Centro de Salud ASOMEL",
            "code" => "106238",
            "comuna_id" => 5101
        ],
        [
            "name" => "Laboratorio Diagnóstico e Imagenológico - IDU",
            "code" => "106239",
            "comuna_id" => 5101
        ],
        [
            "name" => "Centro Dental Árabe Miguel Jahiatt",
            "code" => "106240",
            "comuna_id" => 5101
        ],
        [
            "name" => "Clínica Dental (Dirección Servicios Estudiantiles Universidad Católica)",
            "code" => "106241",
            "comuna_id" => 5101
        ],
        [
            "name" => "Policlínico (Dirección de Servicios Estudiantiles Universidad Católica)",
            "code" => "106242",
            "comuna_id" => 5101
        ],
        [
            "name" => "Instituto de Rehabilitación Infantil TELETÓN (Valparaíso)",
            "code" => "106243",
            "comuna_id" => 5101
        ],
        [
            "name" => "Instituto de Seguridad del Trabajo (IST)",
            "code" => "106244",
            "comuna_id" => 5101
        ],
        [
            "name" => "Laboratorio Docencia e Investigación Científica (Universidad de Valparaíso)",
            "code" => "106245",
            "comuna_id" => 5101
        ],
        [
            "name" => "Laboratorio Fadda Ltda.",
            "code" => "106246",
            "comuna_id" => 5101
        ],
        [
            "name" => "Laboratorio Hematológico",
            "code" => "106247",
            "comuna_id" => 5101
        ],
        [
            "name" => "Laboratorio SEDELIS",
            "code" => "106248",
            "comuna_id" => 5101
        ],
        [
            "name" => "Laboratorio Toxicología Humana y Ambiental (Universidad de Playa Ancha)",
            "code" => "106249",
            "comuna_id" => 5101
        ],
        [
            "name" => "Centro Odontológico Casablanca",
            "code" => "106253",
            "comuna_id" => 5102
        ],
        [
            "name" => "Centro de Salud Compañía Chilena de Tabacos",
            "code" => "106254",
            "comuna_id" => 5102
        ],
        [
            "name" => "Centro de Salud ASAD",
            "code" => "106255",
            "comuna_id" => 5102
        ],
        [
            "name" => "Centro de Salud Asociación Triomar",
            "code" => "106256",
            "comuna_id" => 5601
        ],
        [
            "name" => "Centro de Atención CENCLIVAL",
            "code" => "106257",
            "comuna_id" => 5101
        ],
        [
            "name" => "Centro de Atención Primaria de Salud Naval (Valparaíso)",
            "code" => "106258",
            "comuna_id" => 5101
        ],
        [
            "name" => "Centro Médico del Niño y Adolescente de Valparaíso",
            "code" => "106259",
            "comuna_id" => 5101
        ],
        [
            "name" => "Consultorio Prefectura San Antonio",
            "code" => "106260",
            "comuna_id" => 5601
        ],
        [
            "name" => "Policlínico de la Asociación Chilena de Seguridad AChS. Agencia San Antonio",
            "code" => "106261",
            "comuna_id" => 5601
        ],
        [
            "name" => "Policlínico de la Asociación Chilena de Seguridad AChS. Agencia Valparaíso",
            "code" => "106262",
            "comuna_id" => 5101
        ],
        [
            "name" => "Centro Médico y Dental Megasalud Valparaíso",
            "code" => "106263",
            "comuna_id" => 5101
        ],
        [
            "name" => "Centro de Salud Familiar Placeres",
            "code" => "106300",
            "comuna_id" => 5101
        ],
        [
            "name" => "Centro de Salud FamiliarEsperanza",
            "code" => "106301",
            "comuna_id" => 5101
        ],
        [
            "name" => "Centro de Salud FamiliarBarón",
            "code" => "106302",
            "comuna_id" => 5101
        ],
        [
            "name" => "Centro de Salud Familiar Reina Isabel II",
            "code" => "106303",
            "comuna_id" => 5101
        ],
        [
            "name" => "Centro de Salud FamiliarPlacilla (Valparaíso)",
            "code" => "106304",
            "comuna_id" => 5101
        ],
        [
            "name" => "Centro de Salud Familiar Jean y Marie Thierry",
            "code" => "106305",
            "comuna_id" => 5101
        ],
        [
            "name" => "Centro de Salud Familiar Las Cañas",
            "code" => "106306",
            "comuna_id" => 5101
        ],
        [
            "name" => "Centro de Salud FamiliarMarcelo Mena",
            "code" => "106307",
            "comuna_id" => 5101
        ],
        [
            "name" => "Centro de Salud FamiliarPlaza Justicia",
            "code" => "106308",
            "comuna_id" => 5101
        ],
        [
            "name" => "Centro de Salud FamiliarCordillera",
            "code" => "106309",
            "comuna_id" => 5101
        ],
        [
            "name" => "Centro de Salud FamiliarQuebrada Verde",
            "code" => "106311",
            "comuna_id" => 5101
        ],
        [
            "name" => "Centro de Salud FamiliarPuertas Negras",
            "code" => "106312",
            "comuna_id" => 5101
        ],
        [
            "name" => "Centro de Salud Familiar San Antonio",
            "code" => "106314",
            "comuna_id" => 5601
        ],
        [
            "name" => "Centro de Salud Familiar Barrancas",
            "code" => "106319",
            "comuna_id" => 5601
        ],
        [
            "name" => "Centro de Salud FamiliarCartagena",
            "code" => "106326",
            "comuna_id" => 5603
        ],
        [
            "name" => "Centro de Salud FamiliarAlgarrobo",
            "code" => "106327",
            "comuna_id" => 5602
        ],
        [
            "name" => "Centro de Salud FamiliarEl Quisco",
            "code" => "106328",
            "comuna_id" => 5604
        ],
        [
            "name" => "Centro de Salud Familiar Néstor Fernández Thomas",
            "code" => "106329",
            "comuna_id" => 5601
        ],
        [
            "name" => "Centro de Salud FamiliarRodelillo",
            "code" => "106330",
            "comuna_id" => 5101
        ],
        [
            "name" => "Centro de Salud Familiar 30 de Marzo",
            "code" => "106333",
            "comuna_id" => 5601
        ],
        [
            "name" => "Centro de Salud Familiar Padre Damián Molokai",
            "code" => "106334",
            "comuna_id" => 5101
        ],
        [
            "name" => "Consultorio Policlínica Diocesana",
            "code" => "106335",
            "comuna_id" => 5101
        ],
        [
            "name" => "Centro de Salud Familiar Diputado Manuel Bustos Huerta de San Antonio",
            "code" => "106336",
            "comuna_id" => 5601
        ],
        [
            "name" => "Centro de Salud Rural Rocas de Santo Domingo",
            "code" => "106337",
            "comuna_id" => 5606
        ],
        [
            "name" => "Centro de Salud Rural El Tabo",
            "code" => "106338",
            "comuna_id" => 5605
        ],
        [
            "name" => "Consultorio General Rural Juan Fernández",
            "code" => "106400",
            "comuna_id" => 5104
        ],
        [
            "name" => "Posta de Salud Rural Laguna Verde",
            "code" => "106401",
            "comuna_id" => 5101
        ],
        [
            "name" => "Posta de Salud Rural Quintay",
            "code" => "106402",
            "comuna_id" => 5102
        ],
        [
            "name" => "Posta de Salud Rural Las Dichas",
            "code" => "106403",
            "comuna_id" => 5102
        ],
        [
            "name" => "Posta de Salud Rural Los Maitenes",
            "code" => "106404",
            "comuna_id" => 5102
        ],
        [
            "name" => "Posta de Salud Rural Lagunillas",
            "code" => "106405",
            "comuna_id" => 5102
        ],
        [
            "name" => "Posta de Salud Rural Lo Zárate",
            "code" => "106406",
            "comuna_id" => 5603
        ],
        [
            "name" => "Posta de Salud Rural Bucalemu (Santo Domingo)",
            "code" => "106407",
            "comuna_id" => 5606
        ],
        [
            "name" => "Posta de Salud Rural Lo Abarca",
            "code" => "106408",
            "comuna_id" => 5603
        ],
        [
            "name" => "Posta de Salud Rural San Sebastián",
            "code" => "106409",
            "comuna_id" => 5603
        ],
        [
            "name" => "Posta de Salud Rural El Yeco",
            "code" => "106410",
            "comuna_id" => 5602
        ],
        [
            "name" => "Posta de Salud Rural San José (Algarrobo)",
            "code" => "106411",
            "comuna_id" => 5602
        ],
        [
            "name" => "Posta de Salud Rural El Convento",
            "code" => "106413",
            "comuna_id" => 5606
        ],
        [
            "name" => "Posta de Salud Rural San Enrique",
            "code" => "106414",
            "comuna_id" => 5606
        ],
        [
            "name" => "Posta de Salud Rural Las Cruces (El Tabo)",
            "code" => "106416",
            "comuna_id" => 5605
        ],
        [
            "name" => "Posta de Salud Rural El Asilo",
            "code" => "106417",
            "comuna_id" => 5601
        ],
        [
            "name" => "Posta de Salud Rural Cuncumén (San Antonio)",
            "code" => "106418",
            "comuna_id" => 5601
        ],
        [
            "name" => "Posta de Salud Rural San Juan de San Antonio",
            "code" => "106419",
            "comuna_id" => 5601
        ],
        [
            "name" => "Posta de Salud Rural Leyda",
            "code" => "106420",
            "comuna_id" => 5601
        ],
        [
            "name" => "Posta de Salud Rural El Turco",
            "code" => "106421",
            "comuna_id" => 5603
        ],
        [
            "name" => "Posta de Salud Rural Lo Gallardo",
            "code" => "106422",
            "comuna_id" => 5601
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Porvenir Bajo",
            "code" => "106711",
            "comuna_id" => 5101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Isla Negra",
            "code" => "106728",
            "comuna_id" => 5604
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Tejas Verdes",
            "code" => "106729",
            "comuna_id" => 5601
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Manuel Bustos Huerta",
            "code" => "106736",
            "comuna_id" => 5601
        ],
        [
            "name" => "SAPU-Placeres",
            "code" => "106800",
            "comuna_id" => 5101
        ],
        [
            "name" => "SAPU-Placilla",
            "code" => "106804",
            "comuna_id" => 5101
        ],
        [
            "name" => "SAPU-Quebrada Verde",
            "code" => "106811",
            "comuna_id" => 5101
        ],
        [
            "name" => "SAPU-Cartagena",
            "code" => "106826",
            "comuna_id" => 5603
        ],
        [
            "name" => "SAPU-Algarrobo",
            "code" => "106827",
            "comuna_id" => 5602
        ],
        [
            "name" => "SAPU-Néstor Fernández Thomas",
            "code" => "106829",
            "comuna_id" => 5601
        ],
        [
            "name" => "Actividades Gestionadas por la Dirección del Servicio para apoyo de la Red (S.S de Viña del Mar-Quillota)",
            "code" => "107010",
            "comuna_id" => 5109
        ],
        [
            "name" => "PRAIS (S.S Viña del Mar Quillota)",
            "code" => "107011",
            "comuna_id" => 5109
        ],
        [
            "name" => "Clínica Dental Móvil Triple. Pat. PW4102 (Viña del Mar )",
            "code" => "107012",
            "comuna_id" => 5109
        ],
        [
            "name" => "Hospital Dr. Gustavo Fricke (Viña del Mar)",
            "code" => "107100",
            "comuna_id" => 5109
        ],
        [
            "name" => "Hospital San Martín (Quillota)",
            "code" => "107101",
            "comuna_id" => 5501
        ],
        [
            "name" => "Hospital de Quilpué",
            "code" => "107102",
            "comuna_id" => 5801
        ],
        [
            "name" => "Hospital Dr. Mario Sánchez Vergara (La Calera)",
            "code" => "107103",
            "comuna_id" => 5502
        ],
        [
            "name" => "Hospital Santo Tomás (Limache)",
            "code" => "107104",
            "comuna_id" => 5802
        ],
        [
            "name" => "Hospital San Agustín (La Ligua)",
            "code" => "107105",
            "comuna_id" => 5401
        ],
        [
            "name" => "Hospital Dr. Víctor Hugo Moll (Cabildo)",
            "code" => "107106",
            "comuna_id" => 5402
        ],
        [
            "name" => "Hospital de Petorca",
            "code" => "107107",
            "comuna_id" => 5404
        ],
        [
            "name" => "Hospital Adriana Cousiño (Quintero)",
            "code" => "107108",
            "comuna_id" => 5107
        ],
        [
            "name" => "Hospital Juana Ross de Edwards (Peñablanca, Villa Alemana)",
            "code" => "107109",
            "comuna_id" => 5804
        ],
        [
            "name" => "Hospital Centro Geriátrico Paz de la Tarde (Limache)",
            "code" => "107110",
            "comuna_id" => 5802
        ],
        [
            "name" => "Clínica Miraflores",
            "code" => "107200",
            "comuna_id" => 5109
        ],
        [
            "name" => "Clínica Reñaca",
            "code" => "107206",
            "comuna_id" => 5109
        ],
        [
            "name" => "Clínica Los Carrera",
            "code" => "107208",
            "comuna_id" => 5801
        ],
        [
            "name" => "Clínica Dr. Manzur",
            "code" => "107209",
            "comuna_id" => 5801
        ],
        [
            "name" => "Sanatorio Marítimo San Juan de Dios",
            "code" => "107210",
            "comuna_id" => 5109
        ],
        [
            "name" => "Instituto de Seguridad  del Trabajo",
            "code" => "107211",
            "comuna_id" => 5109
        ],
        [
            "name" => "Hospital Niños y Cunas",
            "code" => "107212",
            "comuna_id" => 5109
        ],
        [
            "name" => "Hospital Naval Almirante Neff",
            "code" => "107217",
            "comuna_id" => 5109
        ],
        [
            "name" => "Clínica Los Leones",
            "code" => "107222",
            "comuna_id" => 5502
        ],
        [
            "name" => "Clínica Ciudad del Mar (ex Avansalud)",
            "code" => "107223",
            "comuna_id" => 5109
        ],
        [
            "name" => "Hospital Clínico Viña del Mar",
            "code" => "107224",
            "comuna_id" => 5109
        ],
        [
            "name" => "Megasalud S.A. Centro Médico y Dental Viña del Mar",
            "code" => "107255",
            "comuna_id" => 5109
        ],
        [
            "name" => "Centro de Salud Mutual CChC Viña del Mar",
            "code" => "107256",
            "comuna_id" => 5109
        ],
        [
            "name" => "Megasalud S.A. Centro Médico y Dental Quilpué",
            "code" => "107258",
            "comuna_id" => 5801
        ],
        [
            "name" => "Centro Médico Dental Zona V de Valparaíso",
            "code" => "107261",
            "comuna_id" => 5109
        ],
        [
            "name" => "Centro de Atención Primaria de Salud Naval (Viña del Mar)",
            "code" => "107262",
            "comuna_id" => 5109
        ],
        [
            "name" => "Centro de Atención Primaria de Salud Naval (Villa Alemana)",
            "code" => "107263",
            "comuna_id" => 5804
        ],
        [
            "name" => "MAS Salud Limitada",
            "code" => "107264",
            "comuna_id" => 5109
        ],
        [
            "name" => "Laboratorio Clínico Vida Integra",
            "code" => "107265",
            "comuna_id" => 5109
        ],
        [
            "name" => "Policlínico de la Asociación Chilena de Seguridad AChS. Agencia Viña del Mar",
            "code" => "107266",
            "comuna_id" => 5109
        ],
        [
            "name" => "Centro de Rehabilitación Limache Capredena",
            "code" => "107267",
            "comuna_id" => 5802
        ],
        [
            "name" => "Policlínico de la Asociación Chilena de Seguridad AChS Agencia La Ligua",
            "code" => "107268",
            "comuna_id" => 5401
        ],
        [
            "name" => "Policlínico de la Asociación Chilena de Seguridad AChS Agencia Cabildo",
            "code" => "107269",
            "comuna_id" => 5402
        ],
        [
            "name" => "Sala de Procedimientos de Inmunizaciones “Inmunyzan”",
            "code" => "107270",
            "comuna_id" => 5109
        ],
        [
            "name" => "Centro de Salud Familiar Nueva Aurora",
            "code" => "107300",
            "comuna_id" => 5109
        ],
        [
            "name" => "Centro de Salud Familiar Cienfuegos",
            "code" => "107301",
            "comuna_id" => 5109
        ],
        [
            "name" => "Centro de Salud Familiar Miraflores (Viña del Mar)",
            "code" => "107302",
            "comuna_id" => 5109
        ],
        [
            "name" => "Centro de Salud Familiar Gómez Carreño",
            "code" => "107303",
            "comuna_id" => 5109
        ],
        [
            "name" => "Centro de Salud Familiar Marco Maldonado",
            "code" => "107304",
            "comuna_id" => 5109
        ],
        [
            "name" => "Centro de Salud Familiar Concón",
            "code" => "107305",
            "comuna_id" => 5103
        ],
        [
            "name" => "Consultorio Quilpué",
            "code" => "107307",
            "comuna_id" => 5801
        ],
        [
            "name" => "Consultorio El Belloto",
            "code" => "107308",
            "comuna_id" => 5801
        ],
        [
            "name" => "Consultorio Villa Alemana",
            "code" => "107309",
            "comuna_id" => 5804
        ],
        [
            "name" => "Consultorio Dr. Miguel Concha",
            "code" => "107311",
            "comuna_id" => 5501
        ],
        [
            "name" => "Centro de Salud Cardenal Raúl Silva Henríquez de Quillota",
            "code" => "107312",
            "comuna_id" => 5501
        ],
        [
            "name" => "Consultorio La Cruz",
            "code" => "107313",
            "comuna_id" => 5504
        ],
        [
            "name" => "Centro de Salud Familiar Lusitania",
            "code" => "107314",
            "comuna_id" => 5109
        ],
        [
            "name" => "Centro de Salud Familiar Ventanas",
            "code" => "107315",
            "comuna_id" => 5105
        ],
        [
            "name" => "Centro de Salud Familiar Puchuncaví",
            "code" => "107316",
            "comuna_id" => 5105
        ],
        [
            "name" => "Centro de Salud Familiar Manuel Lucero. Olmué",
            "code" => "107317",
            "comuna_id" => 5803
        ],
        [
            "name" => "Centro de Salud Familiar Boco",
            "code" => "107318",
            "comuna_id" => 5501
        ],
        [
            "name" => "Centro de Salud Familiar San Pedro",
            "code" => "107319",
            "comuna_id" => 5501
        ],
        [
            "name" => "Centro de Salud Familiar La Palma",
            "code" => "107320",
            "comuna_id" => 5501
        ],
        [
            "name" => "Centro de Salud Familiar Artificio",
            "code" => "107321",
            "comuna_id" => 5502
        ],
        [
            "name" => "Centro de Salud Familiar Hijuelas",
            "code" => "107322",
            "comuna_id" => 5503
        ],
        [
            "name" => "Centro de Salud Familiar Nogales",
            "code" => "107323",
            "comuna_id" => 5506
        ],
        [
            "name" => "Centro de Salud Familiar El Melón",
            "code" => "107324",
            "comuna_id" => 5506
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Juan Carlos Baeza",
            "code" => "107325",
            "comuna_id" => 5109
        ],
        [
            "name" => "Centro de Salud Familiar Brígida Zavala",
            "code" => "107326",
            "comuna_id" => 5109
        ],
        [
            "name" => "Centro de Salud Familiar Las Torres",
            "code" => "107327",
            "comuna_id" => 5109
        ],
        [
            "name" => "Consultorio Eduardo Frei Montalva (Villa Alemana)",
            "code" => "107328",
            "comuna_id" => 5804
        ],
        [
            "name" => "Centro de Salud Familiar Chincolco",
            "code" => "107329",
            "comuna_id" => 5404
        ],
        [
            "name" => "Consultorio Modulo Odontológico Simón Bolívar",
            "code" => "107350",
            "comuna_id" => 5109
        ],
        [
            "name" => "Centro de Salud Familiar Juan Bautista Bravo Vega",
            "code" => "107351",
            "comuna_id" => 5804
        ],
        [
            "name" => "Centro de Salud Familiar Reñaca Alto Dr. Jorge Kaplan",
            "code" => "107352",
            "comuna_id" => 5109
        ],
        [
            "name" => "Centro de Salud Familiar Alcalde Iván Manríquez",
            "code" => "107353",
            "comuna_id" => 5801
        ],
        [
            "name" => "Centro de Salud Familiar Papudo",
            "code" => "107354",
            "comuna_id" => 5403
        ],
        [
            "name" => "Centro de Salud Familiar Zapallar",
            "code" => "107355",
            "comuna_id" => 5405
        ],
        [
            "name" => "Consultorio Aviador Acevedo",
            "code" => "107356",
            "comuna_id" => 5801
        ],
        [
            "name" => "Consultorio Pompeya",
            "code" => "107357",
            "comuna_id" => 5801
        ],
        [
            "name" => "Posta de Salud Rural Colliguay",
            "code" => "107400",
            "comuna_id" => 5801
        ],
        [
            "name" => "Posta de Salud Rural Quebrada Alvarado",
            "code" => "107401",
            "comuna_id" => 5803
        ],
        [
            "name" => "Posta de Salud Rural Romeral",
            "code" => "107402",
            "comuna_id" => 5503
        ],
        [
            "name" => "Posta de Salud Rural Villa Prat",
            "code" => "107403",
            "comuna_id" => 5503
        ],
        [
            "name" => "Posta de Salud Rural Santa Marta",
            "code" => "107404",
            "comuna_id" => 5401
        ],
        [
            "name" => "Posta de Salud Rural Pueblo de Varas",
            "code" => "107405",
            "comuna_id" => 5401
        ],
        [
            "name" => "Posta de Salud Rural Pueblo de Roco",
            "code" => "107406",
            "comuna_id" => 5401
        ],
        [
            "name" => "Posta de Salud Rural Trapiche",
            "code" => "107407",
            "comuna_id" => 5401
        ],
        [
            "name" => "Posta de Salud Rural Las Parcelas",
            "code" => "107408",
            "comuna_id" => 5401
        ],
        [
            "name" => "Posta de Salud Rural Huaquén (La Ligua)",
            "code" => "107409",
            "comuna_id" => 5401
        ],
        [
            "name" => "Posta de Salud Rural Los Molles",
            "code" => "107410",
            "comuna_id" => 5401
        ],
        [
            "name" => "Posta de Salud Rural Pullally",
            "code" => "107412",
            "comuna_id" => 5403
        ],
        [
            "name" => "Posta de Salud Rural Catapilco",
            "code" => "107414",
            "comuna_id" => 5405
        ],
        [
            "name" => "Posta de Salud Rural Alicahue",
            "code" => "107415",
            "comuna_id" => 5402
        ],
        [
            "name" => "Posta de Salud Rural Artificio (Cabildo)",
            "code" => "107416",
            "comuna_id" => 5402
        ],
        [
            "name" => "Posta de Salud Rural La Viña",
            "code" => "107417",
            "comuna_id" => 5402
        ],
        [
            "name" => "Posta de Salud Rural Hierro Viejo",
            "code" => "107419",
            "comuna_id" => 5404
        ],
        [
            "name" => "Posta de Salud Rural Pichicuy",
            "code" => "107421",
            "comuna_id" => 5401
        ],
        [
            "name" => "Posta de Salud Rural Maitencillo (Puchuncaví)",
            "code" => "107422",
            "comuna_id" => 5105
        ],
        [
            "name" => "Posta de Salud Rural Horcón",
            "code" => "107425",
            "comuna_id" => 5105
        ],
        [
            "name" => "Posta de Salud Rural La Vega (Olmué)",
            "code" => "107426",
            "comuna_id" => 5803
        ],
        [
            "name" => "Posta de Salud Rural Las Palmas",
            "code" => "107427",
            "comuna_id" => 5803
        ],
        [
            "name" => "Posta de Salud Rural Pachacamita",
            "code" => "107428",
            "comuna_id" => 5502
        ],
        [
            "name" => "Posta de Salud Rural La Canela",
            "code" => "107429",
            "comuna_id" => 5401
        ],
        [
            "name" => "Posta de Salud Rural Manzanar",
            "code" => "107430",
            "comuna_id" => 5501
        ],
        [
            "name" => "Posta de Salud Rural Las Puertas",
            "code" => "107431",
            "comuna_id" => 5402
        ],
        [
            "name" => "Posta de Salud Rural Pachacama",
            "code" => "107433",
            "comuna_id" => 5502
        ],
        [
            "name" => "Posta de Salud Rural Loncura",
            "code" => "107434",
            "comuna_id" => 5107
        ],
        [
            "name" => "Posta de Salud Rural Manuel Rodríguez",
            "code" => "107435",
            "comuna_id" => 5502
        ],
        [
            "name" => "COSAM y Psiquiatría Comunitaria Concón",
            "code" => "107600",
            "comuna_id" => 5103
        ],
        [
            "name" => "COSAM Limache",
            "code" => "107601",
            "comuna_id" => 5802
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Achupallas 'Sergio Donoso'",
            "code" => "107702",
            "comuna_id" => 5109
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Santa Julia",
            "code" => "107703",
            "comuna_id" => 5109
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Cardenal Raúl Silva Henríquez 'Cerro Macaya'",
            "code" => "107712",
            "comuna_id" => 5501
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Ex Asentamiento El Melón",
            "code" => "107713",
            "comuna_id" => 5506
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Patricia Guerra",
            "code" => "107721",
            "comuna_id" => 5502
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Villa Hermosa",
            "code" => "107725",
            "comuna_id" => 5109
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Las Palmas",
            "code" => "107727",
            "comuna_id" => 5109
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Pedegua",
            "code" => "107729",
            "comuna_id" => 5404
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar El Retiro",
            "code" => "107756",
            "comuna_id" => 5801
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Santa Teresita",
            "code" => "107758",
            "comuna_id" => 5501
        ],
        [
            "name" => "SAPU-Nueva Aurora",
            "code" => "107800",
            "comuna_id" => 5109
        ],
        [
            "name" => "SAPU-Miraflores (Viña del Mar)",
            "code" => "107802",
            "comuna_id" => 5109
        ],
        [
            "name" => "SAPU-Concón",
            "code" => "107805",
            "comuna_id" => 5103
        ],
        [
            "name" => "SAPU-El Belloto Sur",
            "code" => "107808",
            "comuna_id" => 5801
        ],
        [
            "name" => "SAPU-Ventanas",
            "code" => "107815",
            "comuna_id" => 5105
        ],
        [
            "name" => "SAPU-Artificio",
            "code" => "107821",
            "comuna_id" => 5502
        ],
        [
            "name" => "SAPU-Eduardo Frei Montalva",
            "code" => "107828",
            "comuna_id" => 5804
        ],
        [
            "name" => "Actividades Gestionadas por la Dirección del Servicio para apoyo de la Red (S.S de Aconcagua)",
            "code" => "108010",
            "comuna_id" => 5701
        ],
        [
            "name" => "PRAIS (S.S Aconcagua)",
            "code" => "108011",
            "comuna_id" => 5701
        ],
        [
            "name" => "Oficina Sanitaria Los Libertadores",
            "code" => "108090",
            "comuna_id" => 5301
        ],
        [
            "name" => "Hospital de San Camilo (San Felipe)",
            "code" => "108100",
            "comuna_id" => 5701
        ],
        [
            "name" => "Hospital San Juan de Dios (Los Andes)",
            "code" => "108101",
            "comuna_id" => 5301
        ],
        [
            "name" => "Hospital San Francisco (Llaillay)",
            "code" => "108102",
            "comuna_id" => 5703
        ],
        [
            "name" => "Hospital San Antonio (Putaendo)",
            "code" => "108104",
            "comuna_id" => 5705
        ],
        [
            "name" => "Hospital Psiquiátrico Dr. Philippe Pinel (Putaendo)",
            "code" => "108105",
            "comuna_id" => 5705
        ],
        [
            "name" => "Clínica Río Blanco",
            "code" => "108204",
            "comuna_id" => 5301
        ],
        [
            "name" => "ENFAS Limitada",
            "code" => "108205",
            "comuna_id" => 5301
        ],
        [
            "name" => "Centro Médico Dental Zona V de Valparaíso",
            "code" => "108206",
            "comuna_id" => 5701
        ],
        [
            "name" => "Policlínico de la Asociación Chilena de Seguridad AChS Agencia San Felipe",
            "code" => "108207",
            "comuna_id" => 5701
        ],
        [
            "name" => "Policlínico de la Asociación Chilena de Seguridad AChS Agencia Los Andes",
            "code" => "108208",
            "comuna_id" => 5301
        ],
        [
            "name" => "Centro de Salud Familiar Llaillay",
            "code" => "108300",
            "comuna_id" => 5703
        ],
        [
            "name" => "Centro de Salud Familiar Rinconada",
            "code" => "108301",
            "comuna_id" => 5303
        ],
        [
            "name" => "Centro de Salud Familiar San Esteban",
            "code" => "108302",
            "comuna_id" => 5304
        ],
        [
            "name" => "Centro de Salud Familiar Catemu",
            "code" => "108303",
            "comuna_id" => 5702
        ],
        [
            "name" => "Centro de Salud Familiar Putaendo",
            "code" => "108304",
            "comuna_id" => 5705
        ],
        [
            "name" => "Centro de Salud Familiar San Felipe 'El Real'",
            "code" => "108305",
            "comuna_id" => 5701
        ],
        [
            "name" => "Centro de Salud Familiar Cordillera Andina (Urbano 2)",
            "code" => "108306",
            "comuna_id" => 5301
        ],
        [
            "name" => "Centro de Salud Familiar Centenario",
            "code" => "108307",
            "comuna_id" => 5301
        ],
        [
            "name" => "Centro de Salud Familiar Pedro Aguirre Cerda",
            "code" => "108308",
            "comuna_id" => 5302
        ],
        [
            "name" => "Centro de Salud Familiar Santa María",
            "code" => "108309",
            "comuna_id" => 5706
        ],
        [
            "name" => "Centro de Salud Familiar Curimón",
            "code" => "108310",
            "comuna_id" => 5701
        ],
        [
            "name" => "Centro de Salud Familiar Panquehue",
            "code" => "108311",
            "comuna_id" => 5704
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Segismundo Iturra Taito",
            "code" => "108312",
            "comuna_id" => 5701
        ],
        [
            "name" => "Posta de Salud Rural Lo Calvo",
            "code" => "108400",
            "comuna_id" => 5304
        ],
        [
            "name" => "Posta de Salud Rural Cariño Botado",
            "code" => "108401",
            "comuna_id" => 5304
        ],
        [
            "name" => "Posta de Salud Rural Campos de Ahumada",
            "code" => "108402",
            "comuna_id" => 5304
        ],
        [
            "name" => "Posta de Salud Rural Río Colorado",
            "code" => "108403",
            "comuna_id" => 5304
        ],
        [
            "name" => "Posta de Salud Rural Río Blanco (Los Andes)",
            "code" => "108404",
            "comuna_id" => 5301
        ],
        [
            "name" => "Posta de Salud Rural San Vicente (Calle Larga)",
            "code" => "108405",
            "comuna_id" => 5302
        ],
        [
            "name" => "Posta de Salud Rural Piguchén (Putaendo)",
            "code" => "108406",
            "comuna_id" => 5705
        ],
        [
            "name" => "Posta de Salud Rural Guzmanes",
            "code" => "108407",
            "comuna_id" => 5705
        ],
        [
            "name" => "Posta de Salud Rural Santa Filomena (Santa María)",
            "code" => "108409",
            "comuna_id" => 5706
        ],
        [
            "name" => "Posta de Salud Rural La Orilla (Putaendo)",
            "code" => "108410",
            "comuna_id" => 5705
        ],
        [
            "name" => "Posta de Salud Rural Quebrada de Herrera",
            "code" => "108411",
            "comuna_id" => 5705
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Lo Calvo",
            "code" => "108700",
            "comuna_id" => 5304
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Los Cerrillos",
            "code" => "108703",
            "comuna_id" => 5702
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Juan Pablo Segundo",
            "code" => "108707",
            "comuna_id" => 5301
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Las Cadenas",
            "code" => "108709",
            "comuna_id" => 5706
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Quebrada Herrera",
            "code" => "108712",
            "comuna_id" => 5701
        ],
        [
            "name" => "SAPU San Felipe",
            "code" => "108811",
            "comuna_id" => 5701
        ],
        [
            "name" => "Actividades Gestionadas por la Dirección del Servicio para apoyo de la Red (S.S Metropolitano Norte)",
            "code" => "109010",
            "comuna_id" => 13108
        ],
        [
            "name" => "PRAIS (S.S Metropolitano Norte)",
            "code" => "109011",
            "comuna_id" => 13108
        ],
        [
            "name" => "Clínica Dental Móvil Simple. Pat. PW4082 (TilTil)",
            "code" => "109012",
            "comuna_id" => 13303
        ],
        [
            "name" => "Complejo Hospitalario San José (Santiago, Independencia)",
            "code" => "109100",
            "comuna_id" => 13108
        ],
        [
            "name" => "Hospital Clínico de Niños Dr. Roberto del Río (Santiago, Independencia)",
            "code" => "109101",
            "comuna_id" => 13108
        ],
        [
            "name" => "Instituto Psiquiátrico Dr. José Horwitz Barak (Santiago, Recoleta)",
            "code" => "109102",
            "comuna_id" => 13127
        ],
        [
            "name" => "Instituto Nacional del Cáncer Dr. Caupolicán Pardo Correa (Santiago, Recoleta)",
            "code" => "109103",
            "comuna_id" => 13108
        ],
        [
            "name" => "Hospital de Til Til",
            "code" => "109104",
            "comuna_id" => 13303
        ],
        [
            "name" => "Hospital Clínico Universidad de Chile",
            "code" => "109200",
            "comuna_id" => 13108
        ],
        [
            "name" => "Clínica Dávila",
            "code" => "109201",
            "comuna_id" => 13127
        ],
        [
            "name" => "Centro Integramédica Norte",
            "code" => "109202",
            "comuna_id" => 13107
        ],
        [
            "name" => "Centro de Salud Mutual CChC Quilicura",
            "code" => "109204",
            "comuna_id" => 13125
        ],
        [
            "name" => "Centro Vida Integra Quilicura",
            "code" => "109205",
            "comuna_id" => 13125
        ],
        [
            "name" => "Centro Asistencial AChS Colina",
            "code" => "109206",
            "comuna_id" => 13301
        ],
        [
            "name" => "Policlínico del Trabajador AChS Parque Las Américas",
            "code" => "109207",
            "comuna_id" => 13104
        ],
        [
            "name" => "Centro Asistencial AChS Quilicura",
            "code" => "109208",
            "comuna_id" => 13125
        ],
        [
            "name" => "Centro Asistencial AChS Vespucio Oeste",
            "code" => "109209",
            "comuna_id" => 13125
        ],
        [
            "name" => "Clínica Astra Independencia",
            "code" => "109210",
            "comuna_id" => 13108
        ],
        [
            "name" => "Centro Médico y Dental Megasalud Conchalí",
            "code" => "109211",
            "comuna_id" => 13104
        ],
        [
            "name" => "Centro Médico Vivaceta",
            "code" => "109212",
            "comuna_id" => 13108
        ],
        [
            "name" => "Instituto de Seguridad del Trabajo (IST)",
            "code" => "109213",
            "comuna_id" => 13125
        ],
        [
            "name" => "Centro de Salud Familiar Agustín Cruz Melo",
            "code" => "109300",
            "comuna_id" => 13108
        ],
        [
            "name" => "Centro de Salud Familiar Recoleta",
            "code" => "109301",
            "comuna_id" => 13127
        ],
        [
            "name" => "Centro de Salud Familiar Lucas Sierra",
            "code" => "109302",
            "comuna_id" => 13104
        ],
        [
            "name" => "Centro de Salud Familiar Quinta Bella",
            "code" => "109303",
            "comuna_id" => 13127
        ],
        [
            "name" => "Centro de Salud Familiar Valdivieso",
            "code" => "109304",
            "comuna_id" => 13127
        ],
        [
            "name" => "Consultorio La Pincoya",
            "code" => "109305",
            "comuna_id" => 13107
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Juan Petrinovic (Ex Scroggie)",
            "code" => "109307",
            "comuna_id" => 13127
        ],
        [
            "name" => "Centro de Salud Familiar Alberto Bachelet Martínez",
            "code" => "109308",
            "comuna_id" => 13104
        ],
        [
            "name" => "Centro de Salud Familiar José Symon Ojeda",
            "code" => "109309",
            "comuna_id" => 13104
        ],
        [
            "name" => "Centro de Salud Familiar Colina",
            "code" => "109310",
            "comuna_id" => 13301
        ],
        [
            "name" => "Consultorio José Bauzá Frau",
            "code" => "109311",
            "comuna_id" => 13302
        ],
        [
            "name" => "Centro de Salud Familiar Batuco",
            "code" => "109312",
            "comuna_id" => 13302
        ],
        [
            "name" => "Consultorio Irene Frei de Cid",
            "code" => "109313",
            "comuna_id" => 13125
        ],
        [
            "name" => "Centro de Salud Familiar Juanita Aguirre",
            "code" => "109314",
            "comuna_id" => 13104
        ],
        [
            "name" => "Consultorio Manuel Bustos de Quilicura",
            "code" => "109315",
            "comuna_id" => 13125
        ],
        [
            "name" => "Centro de Salud Familiar Esmeralda",
            "code" => "109316",
            "comuna_id" => 13301
        ],
        [
            "name" => "Centro de Salud Familiar El Barrero",
            "code" => "109317",
            "comuna_id" => 13107
        ],
        [
            "name" => "Centro de Salud Familiar Huertos Familiares",
            "code" => "109320",
            "comuna_id" => 13303
        ],
        [
            "name" => "Centro de Salud Familiar Juan Antonio Ríos",
            "code" => "109321",
            "comuna_id" => 13108
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Salvador Allende Gossens (Huechuraba)",
            "code" => "109323",
            "comuna_id" => 13107
        ],
        [
            "name" => "Centro de Salud Familiar Presidente Salvador Allende Gossens (Quilicura)",
            "code" => "109324",
            "comuna_id" => 13125
        ],
        [
            "name" => "Centro de Salud Familiar Cristo Vive (ONG)",
            "code" => "109390",
            "comuna_id" => 13127
        ],
        [
            "name" => "Posta de Salud Rural Juan Pablo II de Lampa",
            "code" => "109407",
            "comuna_id" => 13302
        ],
        [
            "name" => "Posta de Salud Rural La Capilla de Caleu",
            "code" => "109410",
            "comuna_id" => 13303
        ],
        [
            "name" => "Posta de Salud Rural Montenegro",
            "code" => "109412",
            "comuna_id" => 13303
        ],
        [
            "name" => "Posta de Salud Rural Rungue",
            "code" => "109413",
            "comuna_id" => 13303
        ],
        [
            "name" => "Posta de Salud Rural Polpaico",
            "code" => "109414",
            "comuna_id" => 13303
        ],
        [
            "name" => "Posta de Salud Rural Colorado",
            "code" => "109416",
            "comuna_id" => 13301
        ],
        [
            "name" => "Posta de Salud Rural Los Ingleses",
            "code" => "109417",
            "comuna_id" => 13301
        ],
        [
            "name" => "Posta de Salud Rural Las Canteras",
            "code" => "109418",
            "comuna_id" => 13301
        ],
        [
            "name" => "Posta de Salud Rural Santa Marta de Liray",
            "code" => "109419",
            "comuna_id" => 13301
        ],
        [
            "name" => "Posta de Salud Rural Chacabuco (Colina)",
            "code" => "109420",
            "comuna_id" => 13301
        ],
        [
            "name" => "COSAM Independencia",
            "code" => "109606",
            "comuna_id" => 13108
        ],
        [
            "name" => "COSAM Conchalí",
            "code" => "109607",
            "comuna_id" => 13104
        ],
        [
            "name" => "COSAM Huechuraba",
            "code" => "109608",
            "comuna_id" => 13107
        ],
        [
            "name" => "COSAM Recoleta",
            "code" => "109609",
            "comuna_id" => 13127
        ],
        [
            "name" => "COSAM Quilicura",
            "code" => "109636",
            "comuna_id" => 13125
        ],
        [
            "name" => "COSAM Colina",
            "code" => "109640",
            "comuna_id" => 13301
        ],
        [
            "name" => "COSAM Lampa",
            "code" => "109641",
            "comuna_id" => 13302
        ],
        [
            "name" => "COSAM Til-Til",
            "code" => "109642",
            "comuna_id" => 13303
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Dr. José Symón Ojeda",
            "code" => "109709",
            "comuna_id" => 13104
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Sol de Septiembre",
            "code" => "109711",
            "comuna_id" => 13302
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Batuco",
            "code" => "109712",
            "comuna_id" => 13302
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar La Foresta",
            "code" => "109713",
            "comuna_id" => 13125
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Pucara de Lasana",
            "code" => "109715",
            "comuna_id" => 13125
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Esmeralda",
            "code" => "109716",
            "comuna_id" => 13301
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Los Libertadores",
            "code" => "109718",
            "comuna_id" => 13107
        ],
        [
            "name" => "SAPU-Zapadores",
            "code" => "109801",
            "comuna_id" => 13127
        ],
        [
            "name" => "SAPU-Lucas Sierra",
            "code" => "109802",
            "comuna_id" => 13104
        ],
        [
            "name" => "SAPU-Valdivieso",
            "code" => "109804",
            "comuna_id" => 13127
        ],
        [
            "name" => "SAPU-La Pincoya",
            "code" => "109805",
            "comuna_id" => 13107
        ],
        [
            "name" => "SAPU-Alberto Bachelet Martínez",
            "code" => "109808",
            "comuna_id" => 13104
        ],
        [
            "name" => "SAPU-Symon Ojeda",
            "code" => "109809",
            "comuna_id" => 13104
        ],
        [
            "name" => "SAPU-Colina",
            "code" => "109810",
            "comuna_id" => 13301
        ],
        [
            "name" => "SAPU-José Bauzá Frau",
            "code" => "109811",
            "comuna_id" => 13302
        ],
        [
            "name" => "SAPU-Nº 2 Irene Frei de Cid",
            "code" => "109813",
            "comuna_id" => 13125
        ],
        [
            "name" => "SAPU-Nº 1 (La Plaza)",
            "code" => "109815",
            "comuna_id" => 13125
        ],
        [
            "name" => "SAPU-Juan Antonio Ríos",
            "code" => "109821",
            "comuna_id" => 13108
        ],
        [
            "name" => "SAPU-Presidente Salvador Allende Gossens",
            "code" => "109824",
            "comuna_id" => 13125
        ],
        [
            "name" => "SAPU-Cristo Vive",
            "code" => "109890",
            "comuna_id" => 13127
        ],
        [
            "name" => "Actividades Gestionadas por la Dirección del Servicio para apoyo de la Red (S.S Metropolitano Occidente)",
            "code" => "110010",
            "comuna_id" => 13101
        ],
        [
            "name" => "PRAIS (S.S Metropolitano Occidente)",
            "code" => "110011",
            "comuna_id" => 13101
        ],
        [
            "name" => "Clínica Dental Móvil Simple. Pat. PW4083 (Curacaví)",
            "code" => "110012",
            "comuna_id" => 13503
        ],
        [
            "name" => "Hospital San Juan de Dios (Santiago, Santiago)",
            "code" => "110100",
            "comuna_id" => 13101
        ],
        [
            "name" => "Instituto Traumatológico Dr. Teodoro Gebauer",
            "code" => "110110",
            "comuna_id" => 13101
        ],
        [
            "name" => "Hospital Dr. Félix Bulnes Cerda (Santiago, Quinta Normal)",
            "code" => "110120",
            "comuna_id" => 13126
        ],
        [
            "name" => "Hospital Adalberto Steeger (Talagante)",
            "code" => "110130",
            "comuna_id" => 13601
        ],
        [
            "name" => "Hospital de Peñaflor",
            "code" => "110140",
            "comuna_id" => 13605
        ],
        [
            "name" => "Hospital San José (Melipilla)",
            "code" => "110150",
            "comuna_id" => 13501
        ],
        [
            "name" => "Hospital de Curacaví",
            "code" => "110160",
            "comuna_id" => 13503
        ],
        [
            "name" => "Clínica  Psiquiátrica Santa Cecilia",
            "code" => "110201",
            "comuna_id" => 13101
        ],
        [
            "name" => "Centro de Salud Mutual CChC Talagante",
            "code" => "110219",
            "comuna_id" => 13601
        ],
        [
            "name" => "Clínica del Trabajador AChS",
            "code" => "110268",
            "comuna_id" => 13501
        ],
        [
            "name" => "Clínica Los Maitenes",
            "code" => "110270",
            "comuna_id" => 13501
        ],
        [
            "name" => "Centro de Salud Mutual CChC Melipilla",
            "code" => "110271",
            "comuna_id" => 13501
        ],
        [
            "name" => "Clínica Fundación Gantz",
            "code" => "110272",
            "comuna_id" => 13124
        ],
        [
            "name" => "Centro de Salud Mutual CChC Pudahuel",
            "code" => "110273",
            "comuna_id" => 13124
        ],
        [
            "name" => "Clínica Psiquiatrica Victoria",
            "code" => "110276",
            "comuna_id" => 13605
        ],
        [
            "name" => "Centro Asistencial AChS Peñaflor",
            "code" => "110278",
            "comuna_id" => 13605
        ],
        [
            "name" => "Centro Asistencial AChS Talagante",
            "code" => "110279",
            "comuna_id" => 13601
        ],
        [
            "name" => "Servicio Médico Dental (S) Armada de Chile",
            "code" => "110280",
            "comuna_id" => 13126
        ],
        [
            "name" => "Centro de Oncología Preventiva de la Universidad de Chile",
            "code" => "110281",
            "comuna_id" => 13126
        ],
        [
            "name" => "Centro de Referencia de Salud Salvador Allende",
            "code" => "110300",
            "comuna_id" => 13124
        ],
        [
            "name" => "Centro de Salud Familiar Peñaflor",
            "code" => "110308",
            "comuna_id" => 13605
        ],
        [
            "name" => "Centro de Salud Familiar Andes",
            "code" => "110310",
            "comuna_id" => 13126
        ],
        [
            "name" => "Centro de Salud FamiliarSanta Anita",
            "code" => "110315",
            "comuna_id" => 13117
        ],
        [
            "name" => "Centro de Salud Familiar Pablo Neruda",
            "code" => "110316",
            "comuna_id" => 13117
        ],
        [
            "name" => "Centro de Salud Familiar Lo Franco",
            "code" => "110320",
            "comuna_id" => 13126
        ],
        [
            "name" => "Centro de Salud Familiar Garín",
            "code" => "110325",
            "comuna_id" => 13126
        ],
        [
            "name" => "Centro de Salud FamiliarDr. Adalberto Steeger",
            "code" => "110330",
            "comuna_id" => 13103
        ],
        [
            "name" => "Centro de Salud Familiar Lo Amor",
            "code" => "110331",
            "comuna_id" => 13103
        ],
        [
            "name" => "Centro de Salud Familiar Cerro Navia",
            "code" => "110335",
            "comuna_id" => 13103
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Raúl Yazigi",
            "code" => "110340",
            "comuna_id" => 13117
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Avendaño",
            "code" => "110345",
            "comuna_id" => 13117
        ],
        [
            "name" => "Centro de Salud Familiar Pudahuel Estrella",
            "code" => "110350",
            "comuna_id" => 13124
        ],
        [
            "name" => "Consultorio Pudahuel Poniente",
            "code" => "110351",
            "comuna_id" => 13124
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Gustavo Molina",
            "code" => "110352",
            "comuna_id" => 13124
        ],
        [
            "name" => "Centro de Salud FamiliarCardenal Raúl Silva Henríquez de Pudahuel",
            "code" => "110353",
            "comuna_id" => 13124
        ],
        [
            "name" => "Centro de Salud Familiar Violeta Parra",
            "code" => "110354",
            "comuna_id" => 13124
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Arturo Albertz",
            "code" => "110355",
            "comuna_id" => 13103
        ],
        [
            "name" => "Centro de Salud Familiar Renca",
            "code" => "110360",
            "comuna_id" => 13128
        ],
        [
            "name" => "Centro de Salud FamiliarBicentenario",
            "code" => "110361",
            "comuna_id" => 13128
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Hernán Urzúa Merino",
            "code" => "110362",
            "comuna_id" => 13128
        ],
        [
            "name" => "Centro de Salud Familiar Huamachuco",
            "code" => "110364",
            "comuna_id" => 13128
        ],
        [
            "name" => "Centro de Salud Familiar Juan Pablo II de Padre Hurtado",
            "code" => "110366",
            "comuna_id" => 13604
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Fernando Monckeberg",
            "code" => "110369",
            "comuna_id" => 13605
        ],
        [
            "name" => "Centro de Salud Familiar El Monte",
            "code" => "110370",
            "comuna_id" => 13602
        ],
        [
            "name" => "Centro de Salud Familiar Isla de Maipo",
            "code" => "110375",
            "comuna_id" => 13603
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Edelberto Elgueta",
            "code" => "110378",
            "comuna_id" => 13501
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Francisco Boris Soler",
            "code" => "110379",
            "comuna_id" => 13501
        ],
        [
            "name" => "Centro de Salud Familiar San Manuel",
            "code" => "110380",
            "comuna_id" => 13501
        ],
        [
            "name" => "Centro de Salud Rural Alfarera Rosa Reyes Vilches",
            "code" => "110381",
            "comuna_id" => 13501
        ],
        [
            "name" => "Centro de Salud Familiar Adriana Madrid De Costabal",
            "code" => "110385",
            "comuna_id" => 13504
        ],
        [
            "name" => "Centro de Salud Familiar San Pedro",
            "code" => "110387",
            "comuna_id" => 13505
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Alberto Allende Jones",
            "code" => "110390",
            "comuna_id" => 13601
        ],
        [
            "name" => "Centro de Salud Familiar Villa Alhué",
            "code" => "110393",
            "comuna_id" => 13502
        ],
        [
            "name" => "Posta de Salud Rural Aliro Cárcarmo (Lonquén)",
            "code" => "110400",
            "comuna_id" => 13601
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Irene Frei Montalva",
            "code" => "110410",
            "comuna_id" => 13124
        ],
        [
            "name" => "Centro de Salud Familiar La Islita",
            "code" => "110425",
            "comuna_id" => 13603
        ],
        [
            "name" => "Posta de Salud Rural San Antonio de Naltagua",
            "code" => "110430",
            "comuna_id" => 13603
        ],
        [
            "name" => "Posta de Salud Rural Gacitúa",
            "code" => "110431",
            "comuna_id" => 13603
        ],
        [
            "name" => "Posta de Salud Rural Las Mercedes ( Isla de Maipo )",
            "code" => "110432",
            "comuna_id" => 13603
        ],
        [
            "name" => "Posta de Salud Rural Bollenar",
            "code" => "110440",
            "comuna_id" => 13501
        ],
        [
            "name" => "Posta de Salud Rural Pahuilmo",
            "code" => "110445",
            "comuna_id" => 13501
        ],
        [
            "name" => "Posta de salud Rural Pabellón",
            "code" => "110455",
            "comuna_id" => 13501
        ],
        [
            "name" => "Posta de Salud Rural Santa Emilia",
            "code" => "110465",
            "comuna_id" => 13504
        ],
        [
            "name" => "Posta de Salud Rural Las Mercedes ( María Pinto )",
            "code" => "110470",
            "comuna_id" => 13504
        ],
        [
            "name" => "Posta de Salud Rural Chorombo",
            "code" => "110475",
            "comuna_id" => 13504
        ],
        [
            "name" => "Posta de Salud Rural Cerrillos (Curacaví)",
            "code" => "110477",
            "comuna_id" => 13503
        ],
        [
            "name" => "Posta de Salud Rural Loica",
            "code" => "110485",
            "comuna_id" => 13505
        ],
        [
            "name" => "Posta de Salud Rural La Manga",
            "code" => "110490",
            "comuna_id" => 13505
        ],
        [
            "name" => "Posta de Salud Rural Nihue",
            "code" => "110492",
            "comuna_id" => 13505
        ],
        [
            "name" => "Posta de Salud Rural El Prado",
            "code" => "110495",
            "comuna_id" => 13505
        ],
        [
            "name" => "Posta de Salud Rural Hacienda Alhué",
            "code" => "110503",
            "comuna_id" => 13502
        ],
        [
            "name" => "Posta de Salud Rural Pichi",
            "code" => "110505",
            "comuna_id" => 13502
        ],
        [
            "name" => "Posta de Salud Rural El Asiento",
            "code" => "110510",
            "comuna_id" => 13502
        ],
        [
            "name" => "Posta de Salud Rural Santa María",
            "code" => "110515",
            "comuna_id" => 13502
        ],
        [
            "name" => "Consultorio Coaniquem",
            "code" => "110601",
            "comuna_id" => 13124
        ],
        [
            "name" => "COSAM Cerro Navia",
            "code" => "110619",
            "comuna_id" => 13103
        ],
        [
            "name" => "COSAM Quinta Normal",
            "code" => "110620",
            "comuna_id" => 13126
        ],
        [
            "name" => "COSAM Lo Prado",
            "code" => "110621",
            "comuna_id" => 13117
        ],
        [
            "name" => "COSAM Pudahuel",
            "code" => "110622",
            "comuna_id" => 13124
        ],
        [
            "name" => "COSAM Talagante",
            "code" => "110623",
            "comuna_id" => 13601
        ],
        [
            "name" => "COSAM Peñaflor",
            "code" => "110624",
            "comuna_id" => 13605
        ],
        [
            "name" => "COSAM Melipilla",
            "code" => "110625",
            "comuna_id" => 13501
        ],
        [
            "name" => "COSAM Renca",
            "code" => "110626",
            "comuna_id" => 13128
        ],
        [
            "name" => "COSAM",
            "code" => "110627",
            "comuna_id" => 13124
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Catamarca",
            "code" => "110720",
            "comuna_id" => 13126
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Antumalal",
            "code" => "110725",
            "comuna_id" => 13126
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Los Lagos (Unidad Vecinal Nº 33)",
            "code" => "110735",
            "comuna_id" => 13103
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Concejal Guillermo Flores O.",
            "code" => "110750",
            "comuna_id" => 13124
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Padre Félix Gutiérrez Donoso",
            "code" => "110752",
            "comuna_id" => 13124
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Río Claro",
            "code" => "110754",
            "comuna_id" => 13124
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Mar Caribe",
            "code" => "110756",
            "comuna_id" => 13124
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Santa Corina",
            "code" => "110758",
            "comuna_id" => 13124
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Curacaví",
            "code" => "110760",
            "comuna_id" => 13503
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar La Islita",
            "code" => "110775",
            "comuna_id" => 13603
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Padre Demetrio Bravo",
            "code" => "110778",
            "comuna_id" => 13501
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Obispo Pablo Lizama",
            "code" => "110781",
            "comuna_id" => 13501
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Codigua",
            "code" => "110783",
            "comuna_id" => 13501
        ],
        [
            "name" => "SAPU-Renca",
            "code" => "110860",
            "comuna_id" => 13128
        ],
        [
            "name" => "SAPU-Santa Rosa de Chena",
            "code" => "110867",
            "comuna_id" => 13604
        ],
        [
            "name" => "SAPU-Marcela Jacques Vargas",
            "code" => "110891",
            "comuna_id" => 13601
        ],
        [
            "name" => "Actividades gestionadas por la Dirección del Servicio para apoyo de la Red (S.S Metropolitano Central)",
            "code" => "111010",
            "comuna_id" => 13101
        ],
        [
            "name" => "PRAIS (S.S Metropolitano Central)",
            "code" => "111011",
            "comuna_id" => 13101
        ],
        [
            "name" => "Hospital Clínico San Borja-Arriarán (Santiago, Santiago)",
            "code" => "111100",
            "comuna_id" => 13101
        ],
        [
            "name" => "Hospital Clínico Metropolitano El Carmen Doctor Luis Valentín Ferrada",
            "code" => "111101",
            "comuna_id" => 13119
        ],
        [
            "name" => "Hospital de Urgencia Asistencia Pública Dr. Alejandro del Río",
            "code" => "111195",
            "comuna_id" => 13101
        ],
        [
            "name" => "Hospital Clínico Universidad Católica",
            "code" => "111200",
            "comuna_id" => 13101
        ],
        [
            "name" => "Centro de Salud Mutual CChC Estación Central",
            "code" => "111202",
            "comuna_id" => 13106
        ],
        [
            "name" => "Hospital Penitenciario",
            "code" => "111203",
            "comuna_id" => 13101
        ],
        [
            "name" => "Instituto de Rehabilitación Infantil TELETÓN (Santiago)",
            "code" => "111204",
            "comuna_id" => 13106
        ],
        [
            "name" => "Hospital Clínica IST",
            "code" => "111205",
            "comuna_id" => 13101
        ],
        [
            "name" => "Clínica Los Coihues",
            "code" => "111206",
            "comuna_id" => 13106
        ],
        [
            "name" => "Clínica Santa Inés",
            "code" => "111207",
            "comuna_id" => 13101
        ],
        [
            "name" => "Laboratorio Bio Reval Ltda",
            "code" => "111208",
            "comuna_id" => 13101
        ],
        [
            "name" => "Laboratorio Antonio Concha",
            "code" => "111209",
            "comuna_id" => 13101
        ],
        [
            "name" => "Hernández y Gutiérrez Ltda",
            "code" => "111210",
            "comuna_id" => 13101
        ],
        [
            "name" => "Clínica Central",
            "code" => "111211",
            "comuna_id" => 13101
        ],
        [
            "name" => "Laboratorio Labocenter",
            "code" => "111212",
            "comuna_id" => 13101
        ],
        [
            "name" => "Clínica Sierra Bella",
            "code" => "111214",
            "comuna_id" => 13101
        ],
        [
            "name" => "Clínica Las Violetas",
            "code" => "111215",
            "comuna_id" => 13101
        ],
        [
            "name" => "Laboratorio Santiago Centro",
            "code" => "111216",
            "comuna_id" => 13101
        ],
        [
            "name" => "Centro de Salud Diagnostiko Ltda",
            "code" => "111217",
            "comuna_id" => 13101
        ],
        [
            "name" => "Centro de Salud Omega",
            "code" => "111218",
            "comuna_id" => 13101
        ],
        [
            "name" => "Nueva Clínica Madre e Hijo",
            "code" => "111219",
            "comuna_id" => 13101
        ],
        [
            "name" => "Laboratorio Perfil Bioquímico",
            "code" => "111220",
            "comuna_id" => 13101
        ],
        [
            "name" => "Clínica Juan Pablo II",
            "code" => "111221",
            "comuna_id" => 13101
        ],
        [
            "name" => "Laboratorio Sigma",
            "code" => "111222",
            "comuna_id" => 13101
        ],
        [
            "name" => "Clínica Psiquiatrica España",
            "code" => "111223",
            "comuna_id" => 13101
        ],
        [
            "name" => "Centro de Salud Vival Ltda.",
            "code" => "111224",
            "comuna_id" => 13101
        ],
        [
            "name" => "Laboratorio Referencia Oxman y Cía. Ltda.",
            "code" => "111225",
            "comuna_id" => 13101
        ],
        [
            "name" => "Clínica San Javier",
            "code" => "111229",
            "comuna_id" => 13101
        ],
        [
            "name" => "Clínica Hospital del Profesor",
            "code" => "111230",
            "comuna_id" => 13106
        ],
        [
            "name" => "Clínica Astra",
            "code" => "111232",
            "comuna_id" => 13119
        ],
        [
            "name" => "Centro Integramédica",
            "code" => "111263",
            "comuna_id" => 13101
        ],
        [
            "name" => "Centro Médico Vida Integra Alameda",
            "code" => "111267",
            "comuna_id" => 13101
        ],
        [
            "name" => "Clínica del Trabajador AChS",
            "code" => "111268",
            "comuna_id" => 13501
        ],
        [
            "name" => "Centro de Salud Vida Integra Bandera",
            "code" => "111269",
            "comuna_id" => 13101
        ],
        [
            "name" => "Centro Vida Integra  de Maipú",
            "code" => "111273",
            "comuna_id" => 13119
        ],
        [
            "name" => "Centro Integramédica Oeste",
            "code" => "111274",
            "comuna_id" => 13102
        ],
        [
            "name" => "Clínica Universidad Católica",
            "code" => "111276",
            "comuna_id" => 13101
        ],
        [
            "name" => "Clínica Pedro Montt",
            "code" => "111277",
            "comuna_id" => 13101
        ],
        [
            "name" => "Centro Integramédica Forestal",
            "code" => "111278",
            "comuna_id" => 13101
        ],
        [
            "name" => "Centro Asistencial AChS Alameda",
            "code" => "111281",
            "comuna_id" => 13106
        ],
        [
            "name" => "Centro Asistencial AChS Maipú",
            "code" => "111282",
            "comuna_id" => 13119
        ],
        [
            "name" => "Centro Asistencial AChS Santiago",
            "code" => "111283",
            "comuna_id" => 13101
        ],
        [
            "name" => "Centro Médico y Dental Megasalud Alameda",
            "code" => "111284",
            "comuna_id" => 13101
        ],
        [
            "name" => "Centro Médico y Dental Megasalud Maipu",
            "code" => "111285",
            "comuna_id" => 13119
        ],
        [
            "name" => "Centro Médico y Dental CAPREDENA",
            "code" => "111286",
            "comuna_id" => 13101
        ],
        [
            "name" => "Centro de Salud Mutual CChC Agustinas",
            "code" => "111288",
            "comuna_id" => 13101
        ],
        [
            "name" => "Centro de Salud Mutual CChC Maipú",
            "code" => "111289",
            "comuna_id" => 13119
        ],
        [
            "name" => "Centro Integramédica Estación Central",
            "code" => "111290",
            "comuna_id" => 13106
        ],
        [
            "name" => "Centro Médico y Dental Fundación Asistencial Trabajadores Del Banco del Estado de Chile",
            "code" => "111291",
            "comuna_id" => 13101
        ],
        [
            "name" => "Vacunatorio Marcoleta de la Pontificia Universidad Católica de Chile",
            "code" => "111292",
            "comuna_id" => 13101
        ],
        [
            "name" => "Policlínico Institucional de Gendarmería de Chile",
            "code" => "111293",
            "comuna_id" => 13101
        ],
        [
            "name" => "Establecimiento Penitenciario Santiago 1",
            "code" => "111294",
            "comuna_id" => 13101
        ],
        [
            "name" => "Clínica Bicentenario",
            "code" => "111295",
            "comuna_id" => 13106
        ],
        [
            "name" => "Consultorio Escuela de formación policial de Carabineros de Chile",
            "code" => "111296",
            "comuna_id" => 13102
        ],
        [
            "name" => "Clínica Bellolio",
            "code" => "111297",
            "comuna_id" => 13119
        ],
        [
            "name" => "Centro de Salud Familiar Santiago Occidente de Carabineros de Chile",
            "code" => "111298",
            "comuna_id" => 13106
        ],
        [
            "name" => "Integramédica Bandera",
            "code" => "111299",
            "comuna_id" => 13101
        ],
        [
            "name" => "Centro de Salud Familiar N° 1 Dr. Ramón Corbalán Melgarejo",
            "code" => "111300",
            "comuna_id" => 13101
        ],
        [
            "name" => "Centro de Salud Familiar Nº 5",
            "code" => "111301",
            "comuna_id" => 13101
        ],
        [
            "name" => "Centro de Salud Familiar Padre Vicente Irarrázabal",
            "code" => "111302",
            "comuna_id" => 13106
        ],
        [
            "name" => "Centro de Salud Familiar Lo Valledor Norte",
            "code" => "111303",
            "comuna_id" => 13121
        ],
        [
            "name" => "Centro de Salud Familiar Maipú",
            "code" => "111304",
            "comuna_id" => 13119
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Norman Voulliéme",
            "code" => "111305",
            "comuna_id" => 13102
        ],
        [
            "name" => "Centro de Salud Familiar San José de Chuchunco",
            "code" => "111306",
            "comuna_id" => 13106
        ],
        [
            "name" => "Centro de Salud Familiar Enfermera Sofía Pincheira",
            "code" => "111307",
            "comuna_id" => 13102
        ],
        [
            "name" => "Centro de Salud Familiar Dr. José Eduardo Ahués Salame",
            "code" => "111308",
            "comuna_id" => 13119
        ],
        [
            "name" => "Centro de Salud Familiar Dra. Ana María Juricic",
            "code" => "111309",
            "comuna_id" => 13119
        ],
        [
            "name" => "Centro de Salud Familiar Las Mercedes",
            "code" => "111310",
            "comuna_id" => 13106
        ],
        [
            "name" => "Centro de Referencia de Salud de Maipú",
            "code" => "111351",
            "comuna_id" => 13119
        ],
        [
            "name" => "Consultorio Padre Orellana",
            "code" => "111370",
            "comuna_id" => 13101
        ],
        [
            "name" => "Centro de Salud Familiar Arauco",
            "code" => "111372",
            "comuna_id" => 13101
        ],
        [
            "name" => "Consultorio Dr. Benjamín Viel",
            "code" => "111376",
            "comuna_id" => 13101
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Iván Insunza",
            "code" => "111378",
            "comuna_id" => 13119
        ],
        [
            "name" => "Centro de Salud Familiar Clotario Blest",
            "code" => "111379",
            "comuna_id" => 13119
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Carlos Godoy",
            "code" => "111380",
            "comuna_id" => 13119
        ],
        [
            "name" => "Centro de Salud Familiar Ignacio Domeyko",
            "code" => "111381",
            "comuna_id" => 13101
        ],
        [
            "name" => "Centro de Salud Familiar Presidenta Michelle Bachelet",
            "code" => "111382",
            "comuna_id" => 13119
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Luis Ferrada",
            "code" => "111383",
            "comuna_id" => 13119
        ],
        [
            "name" => "Posta de Salud Rural Rinconada de Maipú",
            "code" => "111400",
            "comuna_id" => 13119
        ],
        [
            "name" => "COSAM Estación Central",
            "code" => "111606",
            "comuna_id" => 13106
        ],
        [
            "name" => "COSAM Maipú",
            "code" => "111607",
            "comuna_id" => 13119
        ],
        [
            "name" => "COSAM Cerrillos",
            "code" => "111608",
            "comuna_id" => 13102
        ],
        [
            "name" => "COSAM Santiago",
            "code" => "111609",
            "comuna_id" => 13101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Futramapu",
            "code" => "111704",
            "comuna_id" => 13119
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Europa",
            "code" => "111780",
            "comuna_id" => 13119
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Villa Francia",
            "code" => "111781",
            "comuna_id" => 13106
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar El Abrazo",
            "code" => "111782",
            "comuna_id" => 13119
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Lo Errázuriz",
            "code" => "111783",
            "comuna_id" => 13119
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Bueras",
            "code" => "111784",
            "comuna_id" => 13119
        ],
        [
            "name" => "SAPU-Consultorio Nº1",
            "code" => "111800",
            "comuna_id" => 13101
        ],
        [
            "name" => "SAPU-Maipú",
            "code" => "111804",
            "comuna_id" => 13119
        ],
        [
            "name" => "SAPU-Dr. Norman Voulliéme",
            "code" => "111805",
            "comuna_id" => 13102
        ],
        [
            "name" => "SAPU-San José de Chuchunco",
            "code" => "111806",
            "comuna_id" => 13106
        ],
        [
            "name" => "SAPU-Dra. Ana María Juricic",
            "code" => "111809",
            "comuna_id" => 13119
        ],
        [
            "name" => "Actividades gestionadas por la Dirección del Servicio para apoyo de la Red (S.S Metropolitano Oriente)",
            "code" => "112010",
            "comuna_id" => 13123
        ],
        [
            "name" => "PRAIS (S.S Metropolitano Oriente)",
            "code" => "112011",
            "comuna_id" => 13123
        ],
        [
            "name" => "Vacunatorio Internacional SEREMI de Salud Metropolitana",
            "code" => "112095",
            "comuna_id" => 13123
        ],
        [
            "name" => "Hospital Del Salvador (Santiago, Providencia)",
            "code" => "112100",
            "comuna_id" => 13123
        ],
        [
            "name" => "Hospital Dr. Luis Tisné B. (Santiago, Peñalolén)",
            "code" => "112101",
            "comuna_id" => 13122
        ],
        [
            "name" => "Hospital de Niños Dr. Luis Calvo Mackenna (Santiago, Providencia)",
            "code" => "112102",
            "comuna_id" => 13123
        ],
        [
            "name" => "Instituto Nacional de Enfermedades Respiratorias y Cirugía Torácica",
            "code" => "112103",
            "comuna_id" => 13123
        ],
        [
            "name" => "Instituto de Neurocirugía Dr. Alfonso Asenjo",
            "code" => "112104",
            "comuna_id" => 13123
        ],
        [
            "name" => "Instituto Nacional de Rehabilitación Infantil Presidente Pedro Aguirre Cerda",
            "code" => "112105",
            "comuna_id" => 13122
        ],
        [
            "name" => "Instituto Nacional Geriátrico Presidente Eduardo Frei Montalva",
            "code" => "112106",
            "comuna_id" => 13123
        ],
        [
            "name" => "Hospital Hanga Roa (Isla De Pascua)",
            "code" => "112107",
            "comuna_id" => 5201
        ],
        [
            "name" => "Clínica Alemana",
            "code" => "112200",
            "comuna_id" => 13132
        ],
        [
            "name" => "Clínica Tabancura",
            "code" => "112201",
            "comuna_id" => 13132
        ],
        [
            "name" => "Clínica Costanera",
            "code" => "112202",
            "comuna_id" => 13123
        ],
        [
            "name" => "Clínica Cordillera",
            "code" => "112204",
            "comuna_id" => 13114
        ],
        [
            "name" => "Clínica Psiquiatrica Bretaña",
            "code" => "112205",
            "comuna_id" => 13123
        ],
        [
            "name" => "Clínica del Carmen",
            "code" => "112207",
            "comuna_id" => 13118
        ],
        [
            "name" => "Clínica Indisa",
            "code" => "112211",
            "comuna_id" => 13123
        ],
        [
            "name" => "Clínica Las Condes",
            "code" => "112212",
            "comuna_id" => 13114
        ],
        [
            "name" => "Clínica Macul",
            "code" => "112215",
            "comuna_id" => 13118
        ],
        [
            "name" => "Clínica Recuperación Alcohol Alfa",
            "code" => "112217",
            "comuna_id" => 13120
        ],
        [
            "name" => "Clínica Miguel Claro",
            "code" => "112218",
            "comuna_id" => 13123
        ],
        [
            "name" => "Clínica Servet",
            "code" => "112219",
            "comuna_id" => 13123
        ],
        [
            "name" => "Clínica Oftalmólogica los Andes",
            "code" => "112220",
            "comuna_id" => 13132
        ],
        [
            "name" => "Centro Médico y Dental Megasalud Providencia",
            "code" => "112221",
            "comuna_id" => 13123
        ],
        [
            "name" => "Clínica Ñuñoa",
            "code" => "112222",
            "comuna_id" => 13120
        ],
        [
            "name" => "Clínica Psiquiatrica Pocuro",
            "code" => "112224",
            "comuna_id" => 13132
        ],
        [
            "name" => "Clínica San Andrés",
            "code" => "112228",
            "comuna_id" => 13123
        ],
        [
            "name" => "Pensionado San José",
            "code" => "112229",
            "comuna_id" => 13114
        ],
        [
            "name" => "Clínica Sara Moncada",
            "code" => "112231",
            "comuna_id" => 13123
        ],
        [
            "name" => "Hospital FACH",
            "code" => "112238",
            "comuna_id" => 13114
        ],
        [
            "name" => "Hospital Carabineros",
            "code" => "112240",
            "comuna_id" => 13120
        ],
        [
            "name" => "Clínica Oriente",
            "code" => "112241",
            "comuna_id" => 13120
        ],
        [
            "name" => "Clínica Lo Curro",
            "code" => "112242",
            "comuna_id" => 13132
        ],
        [
            "name" => "Centro CONIN Credes",
            "code" => "112243",
            "comuna_id" => 13123
        ],
        [
            "name" => "Hospital del Trabajador  Santiago",
            "code" => "112244",
            "comuna_id" => 13123
        ],
        [
            "name" => "Clínica Santa Rafaela",
            "code" => "112245",
            "comuna_id" => 13123
        ],
        [
            "name" => "Clínica Europa",
            "code" => "112246",
            "comuna_id" => 13123
        ],
        [
            "name" => "Hospital Dipreca Teniente Hernán Merino",
            "code" => "112248",
            "comuna_id" => 13114
        ],
        [
            "name" => "Clínica Santa María",
            "code" => "112249",
            "comuna_id" => 13123
        ],
        [
            "name" => "Clínica Psiquiatrica Renacer",
            "code" => "112252",
            "comuna_id" => 13120
        ],
        [
            "name" => "Clínica Oncológica Arturo López Pérez",
            "code" => "112254",
            "comuna_id" => 13123
        ],
        [
            "name" => "Clínica Psicoterapia los Tiempos",
            "code" => "112258",
            "comuna_id" => 13113
        ],
        [
            "name" => "Clínica Colonial",
            "code" => "112259",
            "comuna_id" => 13123
        ],
        [
            "name" => "Instituto Médico el Arrayán",
            "code" => "112260",
            "comuna_id" => 13115
        ],
        [
            "name" => "Clínica San Carlos de Apoquindo",
            "code" => "112261",
            "comuna_id" => 13114
        ],
        [
            "name" => "Clínica Instituto El Cedro",
            "code" => "112264",
            "comuna_id" => 13113
        ],
        [
            "name" => "Centro Médico y Dental Megasalud Arauco",
            "code" => "112265",
            "comuna_id" => 13114
        ],
        [
            "name" => "Centro Médico y Dental Megasalud Padre Hurtado",
            "code" => "112266",
            "comuna_id" => 13114
        ],
        [
            "name" => "Departamento de Bienestar Social de la Dirección General de Aeronáutica Civil",
            "code" => "112267",
            "comuna_id" => 13123
        ],
        [
            "name" => "Central Odontológica de la Fuerzas Armadas y de Orden",
            "code" => "112268",
            "comuna_id" => 13114
        ],
        [
            "name" => "Instituto de Enfermedades Circulatorias",
            "code" => "112269",
            "comuna_id" => 13123
        ],
        [
            "name" => "Clínica Tregua",
            "code" => "112270",
            "comuna_id" => 13120
        ],
        [
            "name" => "Centro Médico Militar Rosa O'Higgins",
            "code" => "112272",
            "comuna_id" => 13114
        ],
        [
            "name" => "Centro Médico Pediátrico Integral Mediclown",
            "code" => "112273",
            "comuna_id" => 13123
        ],
        [
            "name" => "Procedimientos Clínicos Alto Tabancura",
            "code" => "112274",
            "comuna_id" => 13132
        ],
        [
            "name" => "Centro Médico Alto Tobalaba (Vacunatorio Vacci Protex)",
            "code" => "112275",
            "comuna_id" => 13122
        ],
        [
            "name" => "Clínica de Medicina y Estética MYE",
            "code" => "112276",
            "comuna_id" => 13123
        ],
        [
            "name" => "Centro Médico Vida Integra Tobalaba",
            "code" => "112277",
            "comuna_id" => 13123
        ],
        [
            "name" => "Clínica Monteblanco",
            "code" => "112278",
            "comuna_id" => 13115
        ],
        [
            "name" => "Consultorio Escuela de Carabineros de Chile",
            "code" => "112279",
            "comuna_id" => 13123
        ],
        [
            "name" => "Consultorio Escuela de Suboficiales de Carabineros de Chile",
            "code" => "112280",
            "comuna_id" => 13118
        ],
        [
            "name" => "Centro Médico Irarrázaval Pontificia Universidad Católica de Chile",
            "code" => "112281",
            "comuna_id" => 13120
        ],
        [
            "name" => "Centro Médico y Dental Antonio Varas del Banco del Estado de Chile",
            "code" => "112282",
            "comuna_id" => 13123
        ],
        [
            "name" => "Centro de Referencia de Salud Cordillera Oriente",
            "code" => "112300",
            "comuna_id" => 13122
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Hernán Alessandri",
            "code" => "112301",
            "comuna_id" => 13123
        ],
        [
            "name" => "Centro de Salud Integral Dr. Alfonso Leng",
            "code" => "112302",
            "comuna_id" => 13123
        ],
        [
            "name" => "Centro de Salud Familiar Aguilucho",
            "code" => "112303",
            "comuna_id" => 13123
        ],
        [
            "name" => "Centro de Salud Familiar Apoquindo",
            "code" => "112304",
            "comuna_id" => 13114
        ],
        [
            "name" => "Centro de Salud Familiar Aníbal Ariztía",
            "code" => "112306",
            "comuna_id" => 13114
        ],
        [
            "name" => "Centro de Salud Familiar Lo Barnechea",
            "code" => "112307",
            "comuna_id" => 13115
        ],
        [
            "name" => "Centro de Salud Familiar Vitacura",
            "code" => "112309",
            "comuna_id" => 13132
        ],
        [
            "name" => "Centro de Salud Familiar Rosita Renard",
            "code" => "112310",
            "comuna_id" => 13120
        ],
        [
            "name" => "Centro de Salud Familiar Salvador Bustos",
            "code" => "112311",
            "comuna_id" => 13120
        ],
        [
            "name" => "Centro de Salud Familiar Félix de Amesti",
            "code" => "112312",
            "comuna_id" => 13118
        ],
        [
            "name" => "Centro de Salud Familiar Santa Julia",
            "code" => "112313",
            "comuna_id" => 13118
        ],
        [
            "name" => "Centro de Salud Familiar La Faena",
            "code" => "112314",
            "comuna_id" => 13122
        ],
        [
            "name" => "Centro de Salud Familiar San Luis",
            "code" => "112315",
            "comuna_id" => 13122
        ],
        [
            "name" => "Centro de Salud Familiar Carol Urzúa Ibáñez de Peñalolén",
            "code" => "112316",
            "comuna_id" => 13122
        ],
        [
            "name" => "Centro de Salud Familiar La Reina",
            "code" => "112317",
            "comuna_id" => 13113
        ],
        [
            "name" => "Centro de Salud Familiar Lo Hermida",
            "code" => "112318",
            "comuna_id" => 13122
        ],
        [
            "name" => "Centro de Salud Familiar Padre Alberto Hurtado",
            "code" => "112319",
            "comuna_id" => 13118
        ],
        [
            "name" => "Centro de Salud Familiar Juan Pablo II",
            "code" => "112320",
            "comuna_id" => 13113
        ],
        [
            "name" => "Centro de Salud Familiar Cardenal Silva Henríquez",
            "code" => "112321",
            "comuna_id" => 13122
        ],
        [
            "name" => "Centro de Salud Familiar Padre Gerardo Whelan",
            "code" => "112322",
            "comuna_id" => 13122
        ],
        [
            "name" => "Centro Odontológico Macul",
            "code" => "112323",
            "comuna_id" => 13118
        ],
        [
            "name" => "Posta de Farellones",
            "code" => "112407",
            "comuna_id" => 13115
        ],
        [
            "name" => "Centro Integramédica Barcelona",
            "code" => "112500",
            "comuna_id" => 13123
        ],
        [
            "name" => "Clínica Las Acacias",
            "code" => "112502",
            "comuna_id" => 13123
        ],
        [
            "name" => "Clínica Mella",
            "code" => "112503",
            "comuna_id" => 13123
        ],
        [
            "name" => "Centro Servicios Médicos Santa María",
            "code" => "112505",
            "comuna_id" => 13123
        ],
        [
            "name" => "Clínica Fundación Médica San Cristóbal",
            "code" => "112507",
            "comuna_id" => 13132
        ],
        [
            "name" => "Centro Oftalmológico Luis Pasteur",
            "code" => "112509",
            "comuna_id" => 13132
        ],
        [
            "name" => "Clínica Universidad de Chile Quilín",
            "code" => "112510",
            "comuna_id" => 13122
        ],
        [
            "name" => "Clínica Arauco Salud",
            "code" => "112511",
            "comuna_id" => 13114
        ],
        [
            "name" => "Centro Médico San Joaquín (CEDIUC)",
            "code" => "112512",
            "comuna_id" => 13118
        ],
        [
            "name" => "Clínica Astra Providencia",
            "code" => "112513",
            "comuna_id" => 13123
        ],
        [
            "name" => "Centro Asistencial AChS Egaña",
            "code" => "112514",
            "comuna_id" => 13122
        ],
        [
            "name" => "Centro Asistencial AChS La Reina",
            "code" => "112515",
            "comuna_id" => 13113
        ],
        [
            "name" => "Centro Asistencial AChS Las Condes",
            "code" => "112516",
            "comuna_id" => 13114
        ],
        [
            "name" => "Centro Médico Macul",
            "code" => "112517",
            "comuna_id" => 13118
        ],
        [
            "name" => "Centro de Salud Mutual CChC las Tranqueras",
            "code" => "112518",
            "comuna_id" => 13132
        ],
        [
            "name" => "Centro Médico y Dental Megasalud Ñuñoa",
            "code" => "112519",
            "comuna_id" => 13120
        ],
        [
            "name" => "Centro Médico y Dental Megasalud Kennedy",
            "code" => "112520",
            "comuna_id" => 13114
        ],
        [
            "name" => "Centro Médico Santa María La Dehesa",
            "code" => "112522",
            "comuna_id" => 13115
        ],
        [
            "name" => "Clínica Los Coihues",
            "code" => "112524",
            "comuna_id" => 13123
        ],
        [
            "name" => "Centro Vida Integra",
            "code" => "112525",
            "comuna_id" => 13123
        ],
        [
            "name" => "Centro Integra Médica Manquehue",
            "code" => "112526",
            "comuna_id" => 13114
        ],
        [
            "name" => "Centro Médico Clínica Alemana (La Dehesa)",
            "code" => "112527",
            "comuna_id" => 13115
        ],
        [
            "name" => "Clínica Las Lilas",
            "code" => "112528",
            "comuna_id" => 13123
        ],
        [
            "name" => "Darvax Salud",
            "code" => "112529",
            "comuna_id" => 13114
        ],
        [
            "name" => "Hospital Militar de Santiago",
            "code" => "112530",
            "comuna_id" => 13113
        ],
        [
            "name" => "COSAM La Reina",
            "code" => "112606",
            "comuna_id" => 13113
        ],
        [
            "name" => "COSAM Macul",
            "code" => "112607",
            "comuna_id" => 13118
        ],
        [
            "name" => "COSAM Ñuñoa",
            "code" => "112608",
            "comuna_id" => 13120
        ],
        [
            "name" => "COSAM Las Condes",
            "code" => "112609",
            "comuna_id" => 13114
        ],
        [
            "name" => "COSAM Peñalolén",
            "code" => "112610",
            "comuna_id" => 13122
        ],
        [
            "name" => "COSAM Provisam",
            "code" => "112611",
            "comuna_id" => 13123
        ],
        [
            "name" => "COSAM Lo Barnechea",
            "code" => "112612",
            "comuna_id" => 13115
        ],
        [
            "name" => "COSAM-Vitacura",
            "code" => "112613",
            "comuna_id" => 13132
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Lo Barnechea",
            "code" => "112707",
            "comuna_id" => 13115
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar General Carol Urzúa Ibáñez",
            "code" => "112716",
            "comuna_id" => 13122
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Dragones de La Reina",
            "code" => "112717",
            "comuna_id" => 13113
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Bicentenario",
            "code" => "112799",
            "comuna_id" => 13115
        ],
        [
            "name" => "SAPU-Aníbal Ariztía",
            "code" => "112806",
            "comuna_id" => 13114
        ],
        [
            "name" => "SAPU-Lo Barnechea",
            "code" => "112807",
            "comuna_id" => 13115
        ],
        [
            "name" => "SAPU-Rosita Renard",
            "code" => "112810",
            "comuna_id" => 13120
        ],
        [
            "name" => "SAPU-Santa Julia",
            "code" => "112813",
            "comuna_id" => 13118
        ],
        [
            "name" => "SAPU-La Faena",
            "code" => "112814",
            "comuna_id" => 13122
        ],
        [
            "name" => "SAPU-San Luis",
            "code" => "112815",
            "comuna_id" => 13122
        ],
        [
            "name" => "SAPU-Carol Urzúa Ibáñez",
            "code" => "112816",
            "comuna_id" => 13122
        ],
        [
            "name" => "SAPU-Lo Hermida",
            "code" => "112818",
            "comuna_id" => 13122
        ],
        [
            "name" => "SAPU-Centro de Urgencia Ñuñoa",
            "code" => "112820",
            "comuna_id" => 13120
        ],
        [
            "name" => "Clínica Avansalud Providencia",
            "code" => "112954",
            "comuna_id" => 13123
        ],
        [
            "name" => "Dirección Previsional de Carabineros de Chile",
            "code" => "112955",
            "comuna_id" => 13123
        ],
        [
            "name" => "Laboratorio Clínico Blanco",
            "code" => "112956",
            "comuna_id" => 13123
        ],
        [
            "name" => "Química Clínica Especializada",
            "code" => "112957",
            "comuna_id" => 13123
        ],
        [
            "name" => "Laboratorio Bionet",
            "code" => "112958",
            "comuna_id" => 13123
        ],
        [
            "name" => "Bioánalisis Ltda.",
            "code" => "112959",
            "comuna_id" => 13123
        ],
        [
            "name" => "Dilab",
            "code" => "112960",
            "comuna_id" => 13123
        ],
        [
            "name" => "Elsa",
            "code" => "112961",
            "comuna_id" => 13123
        ],
        [
            "name" => "San Cristóbal",
            "code" => "112962",
            "comuna_id" => 13132
        ],
        [
            "name" => "Red-Lab",
            "code" => "112963",
            "comuna_id" => 13120
        ],
        [
            "name" => "Instituto Oftalmológico Puerta del Sol",
            "code" => "112976",
            "comuna_id" => 13114
        ],
        [
            "name" => "Centro de Diagnóstico Integramédica Alto Las Condes",
            "code" => "112977",
            "comuna_id" => 13114
        ],
        [
            "name" => "Clínica Los Domínicos",
            "code" => "112979",
            "comuna_id" => 13114
        ],
        [
            "name" => "Centro Vida Integra de Las Condes",
            "code" => "112980",
            "comuna_id" => 13114
        ],
        [
            "name" => "Centro Mater Esperanza Nueva Limitada",
            "code" => "112981",
            "comuna_id" => 13120
        ],
        [
            "name" => "Megasalud",
            "code" => "112982",
            "comuna_id" => 13123
        ],
        [
            "name" => "VidaIntegra",
            "code" => "112983",
            "comuna_id" => 13113
        ],
        [
            "name" => "VidaIntegra (El Bosque Norte)",
            "code" => "112984",
            "comuna_id" => 13114
        ],
        [
            "name" => "Integramédica Las Condes",
            "code" => "112985",
            "comuna_id" => 13114
        ],
        [
            "name" => "Integramédica Maipú",
            "code" => "112986",
            "comuna_id" => 13119
        ],
        [
            "name" => "Centro de Salud New Clinic",
            "code" => "112987",
            "comuna_id" => 13123
        ],
        [
            "name" => "Centro Vida Integra de Ñuñoa",
            "code" => "112990",
            "comuna_id" => 13120
        ],
        [
            "name" => "Barnafi Krause Diagnóstica",
            "code" => "112994",
            "comuna_id" => 13123
        ],
        [
            "name" => "Centro de Salud Mutual CChC Providencia",
            "code" => "112995",
            "comuna_id" => 13123
        ],
        [
            "name" => "Centro de Salud Dial Médica",
            "code" => "112996",
            "comuna_id" => 13123
        ],
        [
            "name" => "Clínica Corporación de Ayuda al Paciente Mental",
            "code" => "112999",
            "comuna_id" => 13120
        ],
        [
            "name" => "Actividades gestionadas por la Dirección del Servicio para apoyo de la Red (S.S Metropolitano Sur)",
            "code" => "113010",
            "comuna_id" => 13130
        ],
        [
            "name" => "PRAIS (S.S Metropolitano Sur)",
            "code" => "113011",
            "comuna_id" => 13130
        ],
        [
            "name" => "Hospital Barros Luco Trudeau (Santiago, San Miguel)",
            "code" => "113100",
            "comuna_id" => 13130
        ],
        [
            "name" => "Hospital Dr. Exequiel González Cortés (Santiago, San Miguel)",
            "code" => "113130",
            "comuna_id" => 13130
        ],
        [
            "name" => "Hospital San Luis (Buin)",
            "code" => "113150",
            "comuna_id" => 13402
        ],
        [
            "name" => "Hospital de Enfermedades Infecciosas Dr. Lucio Córdova (Santiago, San Miguel)",
            "code" => "113160",
            "comuna_id" => 13130
        ],
        [
            "name" => "Hospital Psiquiátrico El Peral (Santiago, Puente Alto)",
            "code" => "113170",
            "comuna_id" => 13201
        ],
        [
            "name" => "Hospital El Pino (Santiago, San Bernardo)",
            "code" => "113180",
            "comuna_id" => 13401
        ],
        [
            "name" => "Centro de Referencia de Salud El Pino",
            "code" => "113181",
            "comuna_id" => 13401
        ],
        [
            "name" => "Hospital Parroquial (Santiago, San Bernardo) (D)",
            "code" => "113190",
            "comuna_id" => 13401
        ],
        [
            "name" => "Clínica San Miguel",
            "code" => "113213",
            "comuna_id" => 13130
        ],
        [
            "name" => "Clínica Psiquiátrica Nelly Vergara",
            "code" => "113218",
            "comuna_id" => 13130
        ],
        [
            "name" => "Centro Integramédica San Miguel",
            "code" => "113233",
            "comuna_id" => 13130
        ],
        [
            "name" => "Centro Vida Integra de San Miguel",
            "code" => "113234",
            "comuna_id" => 13130
        ],
        [
            "name" => "Centro de Salud Mutual CChC San Bernardo",
            "code" => "113235",
            "comuna_id" => 13401
        ],
        [
            "name" => "Clínica Santa Lucía",
            "code" => "113238",
            "comuna_id" => 13401
        ],
        [
            "name" => "Centro Vida Integra de San Bernardo",
            "code" => "113239",
            "comuna_id" => 13401
        ],
        [
            "name" => "Centro de Salud Mutual CChC Lo Espejo",
            "code" => "113241",
            "comuna_id" => 13116
        ],
        [
            "name" => "Clínica Santa Rosa",
            "code" => "113242",
            "comuna_id" => 13129
        ],
        [
            "name" => "Clínica de Cirugía Plástica",
            "code" => "113244",
            "comuna_id" => 13401
        ],
        [
            "name" => "Clínica Santa Amalia",
            "code" => "113245",
            "comuna_id" => 13109
        ],
        [
            "name" => "Centro Asistencial AChS Buin",
            "code" => "113246",
            "comuna_id" => 13402
        ],
        [
            "name" => "Centro Asistencial AChS San Bernardo",
            "code" => "113247",
            "comuna_id" => 13401
        ],
        [
            "name" => "Centro Asistencial AChS San Miguel",
            "code" => "113248",
            "comuna_id" => 13130
        ],
        [
            "name" => "Centro de Salud Mutual CChC Paine",
            "code" => "113249",
            "comuna_id" => 13404
        ],
        [
            "name" => "Clínica Astra San Miguel",
            "code" => "113250",
            "comuna_id" => 13130
        ],
        [
            "name" => "Clínica Astra San Bernardo",
            "code" => "113251",
            "comuna_id" => 13401
        ],
        [
            "name" => "Centro Médico y Dental Megasalud Gran Avenida",
            "code" => "113252",
            "comuna_id" => 13130
        ],
        [
            "name" => "Centro Médico y Dental Megasalud San Bernardo",
            "code" => "113253",
            "comuna_id" => 13401
        ],
        [
            "name" => "Centro Asistencial AChS Paine",
            "code" => "113254",
            "comuna_id" => 13404
        ],
        [
            "name" => "Consultorio Tantauco",
            "code" => "113255",
            "comuna_id" => 13105
        ],
        [
            "name" => "Consultorio Prefectura Sur",
            "code" => "113256",
            "comuna_id" => 13109
        ],
        [
            "name" => "Multimédica Ltda.",
            "code" => "113257",
            "comuna_id" => 13130
        ],
        [
            "name" => "San Nicolás",
            "code" => "113258",
            "comuna_id" => 13130
        ],
        [
            "name" => "Macromédica",
            "code" => "113259",
            "comuna_id" => 13401
        ],
        [
            "name" => "Nefrolab",
            "code" => "113260",
            "comuna_id" => 13109
        ],
        [
            "name" => "Radiológico y Laboratorio Santa Lucía",
            "code" => "113261",
            "comuna_id" => 13401
        ],
        [
            "name" => "Centro de Salud Familiar Barros Luco",
            "code" => "113300",
            "comuna_id" => 13130
        ],
        [
            "name" => "Centro de Salud Familiar San Joaquín",
            "code" => "113301",
            "comuna_id" => 13129
        ],
        [
            "name" => "Centro de Salud Familiar Recreo",
            "code" => "113302",
            "comuna_id" => 13130
        ],
        [
            "name" => "Centro de Salud Familiar Amador Neghme",
            "code" => "113303",
            "comuna_id" => 13121
        ],
        [
            "name" => "Consultorio Villa Sur",
            "code" => "113304",
            "comuna_id" => 13121
        ],
        [
            "name" => "Centro de Salud Familiar Arturo Baeza Goñi",
            "code" => "113305",
            "comuna_id" => 13129
        ],
        [
            "name" => "Centro de Salud Familiar Padre Pierre Dubois",
            "code" => "113306",
            "comuna_id" => 13121
        ],
        [
            "name" => "Centro de Salud Familiar Padre Esteban Gumucio",
            "code" => "113307",
            "comuna_id" => 13111
        ],
        [
            "name" => "Centro de Salud Familiar Clara Estrella",
            "code" => "113308",
            "comuna_id" => 13116
        ],
        [
            "name" => "Centro de Salud Familiar Julio Acuña Pinzón",
            "code" => "113309",
            "comuna_id" => 13116
        ],
        [
            "name" => "Centro de Salud Familiar Mariela Salgado",
            "code" => "113310",
            "comuna_id" => 13116
        ],
        [
            "name" => "Centro de Salud Familiar Santa Anselma",
            "code" => "113311",
            "comuna_id" => 13109
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Carlos Lorca",
            "code" => "113312",
            "comuna_id" => 13105
        ],
        [
            "name" => "Centro de Salud Familiar Raúl Cuevas (Ex-San Bernardo)",
            "code" => "113313",
            "comuna_id" => 13401
        ],
        [
            "name" => "Centro de Salud Familiar Cóndores de Chile",
            "code" => "113314",
            "comuna_id" => 13105
        ],
        [
            "name" => "Centro de Salud Familiar Confraternidad",
            "code" => "113315",
            "comuna_id" => 13401
        ],
        [
            "name" => "Centro de Salud Familiar Carol Urzúa de San Bernardo",
            "code" => "113316",
            "comuna_id" => 13401
        ],
        [
            "name" => "Centro de Salud Familiar Santa Laura",
            "code" => "113317",
            "comuna_id" => 13105
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Miguel Ángel Solar (ex CESFAM Paine)",
            "code" => "113318",
            "comuna_id" => 13404
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Raúl Moya",
            "code" => "113319",
            "comuna_id" => 13404
        ],
        [
            "name" => "Centro de Salud Familiar Maipo",
            "code" => "113320",
            "comuna_id" => 13402
        ],
        [
            "name" => "Centro de Salud Familiar Calera de Tango",
            "code" => "113321",
            "comuna_id" => 13403
        ],
        [
            "name" => "Centro de Salud Familiar Santa Teresa de Los Andes",
            "code" => "113322",
            "comuna_id" => 13129
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Mario Salcedo",
            "code" => "113323",
            "comuna_id" => 13105
        ],
        [
            "name" => "Centro de Salud Familiar Dra. Haydeé López Casoou",
            "code" => "113324",
            "comuna_id" => 13105
        ],
        [
            "name" => "Centro de Salud Familiar Eduardo Frei Montalva",
            "code" => "113326",
            "comuna_id" => 13109
        ],
        [
            "name" => "Centro de Salud Familiar Joan Alsina",
            "code" => "113328",
            "comuna_id" => 13401
        ],
        [
            "name" => "Centro de Salud Familiar Orlando Letelier",
            "code" => "113329",
            "comuna_id" => 13105
        ],
        [
            "name" => "Centro de Salud Familiar Raúl Brañes F.",
            "code" => "113330",
            "comuna_id" => 13401
        ],
        [
            "name" => "Centro de Salud Familiar Edgardo Enríquez",
            "code" => "113331",
            "comuna_id" => 13121
        ],
        [
            "name" => "Centro de Salud Familiar Juan Pablo II",
            "code" => "113332",
            "comuna_id" => 13401
        ],
        [
            "name" => "Centro de Salud Familiar Alto Jahuel",
            "code" => "113333",
            "comuna_id" => 13402
        ],
        [
            "name" => "Centro de Salud Familiar Los Bajos de San Agustín",
            "code" => "113334",
            "comuna_id" => 13403
        ],
        [
            "name" => "COSAM El Bosque",
            "code" => "113337",
            "comuna_id" => 13105
        ],
        [
            "name" => "COSAM Pedro Aguirre Cerda",
            "code" => "113338",
            "comuna_id" => 13121
        ],
        [
            "name" => "COSAM San Bernardo",
            "code" => "113339",
            "comuna_id" => 13401
        ],
        [
            "name" => "COSAM San Joaquín",
            "code" => "113341",
            "comuna_id" => 13129
        ],
        [
            "name" => "Centro de Salud Familiar Héctor García",
            "code" => "113390",
            "comuna_id" => 13402
        ],
        [
            "name" => "Centro de Salud Familiar El Manzano",
            "code" => "113394",
            "comuna_id" => 13401
        ],
        [
            "name" => "Centro de Imagenología Mamaria Metropolitano",
            "code" => "113395",
            "comuna_id" => 13130
        ],
        [
            "name" => "Centro de Salud Familiar Pueblo Lo Espejo",
            "code" => "113396",
            "comuna_id" => 13116
        ],
        [
            "name" => "Posta de Salud Rural Linderos",
            "code" => "113402",
            "comuna_id" => 13402
        ],
        [
            "name" => "Posta de Salud Rural Valdivia de Paine",
            "code" => "113404",
            "comuna_id" => 13402
        ],
        [
            "name" => "Posta de Salud Rural Viluco",
            "code" => "113405",
            "comuna_id" => 13402
        ],
        [
            "name" => "Posta de Salud Rural El Recurso",
            "code" => "113406",
            "comuna_id" => 13402
        ],
        [
            "name" => "Posta de Salud Rural Los Morros",
            "code" => "113407",
            "comuna_id" => 13402
        ],
        [
            "name" => "Posta de Salud Rural Pintué",
            "code" => "113408",
            "comuna_id" => 13404
        ],
        [
            "name" => "Posta de Salud Rural Huelquén",
            "code" => "113409",
            "comuna_id" => 13404
        ],
        [
            "name" => "Posta de Salud Rural Rangue",
            "code" => "113410",
            "comuna_id" => 13404
        ],
        [
            "name" => "Posta de Salud Rural Abrantes",
            "code" => "113411",
            "comuna_id" => 13404
        ],
        [
            "name" => "Posta de Salud Rural Chada",
            "code" => "113412",
            "comuna_id" => 13404
        ],
        [
            "name" => "Posta de Salud Rural Santa Inés",
            "code" => "113413",
            "comuna_id" => 13403
        ],
        [
            "name" => "COSAM Lo Espejo",
            "code" => "113642",
            "comuna_id" => 13116
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Yalta",
            "code" => "113701",
            "comuna_id" => 13129
        ],
        [
            "name" => "Centro Comunitario de Salud Familia Sierra Bella",
            "code" => "113702",
            "comuna_id" => 13129
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Cooperación",
            "code" => "113703",
            "comuna_id" => 13121
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Cerrillos de Nos",
            "code" => "113713",
            "comuna_id" => 13401
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Rapa Nui",
            "code" => "113716",
            "comuna_id" => 13401
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Santa Laura",
            "code" => "113717",
            "comuna_id" => 13105
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Juan Aravena",
            "code" => "113722",
            "comuna_id" => 13129
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Lo Herrera",
            "code" => "113728",
            "comuna_id" => 13401
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Reverendo Javier Peró",
            "code" => "113753",
            "comuna_id" => 13129
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Dr. Héctor García",
            "code" => "113790",
            "comuna_id" => 13402
        ],
        [
            "name" => "SAPU-Recreo",
            "code" => "113802",
            "comuna_id" => 13130
        ],
        [
            "name" => "SAPU-Juan Solórzano",
            "code" => "113803",
            "comuna_id" => 13121
        ],
        [
            "name" => "SAPU-La Feria",
            "code" => "113806",
            "comuna_id" => 13121
        ],
        [
            "name" => "SAPU-Padre Esteban Gumucio",
            "code" => "113807",
            "comuna_id" => 13111
        ],
        [
            "name" => "SAPU-Clara Estrella",
            "code" => "113808",
            "comuna_id" => 13116
        ],
        [
            "name" => "SAPU-Julio Acuña Pinzón",
            "code" => "113809",
            "comuna_id" => 13116
        ],
        [
            "name" => "SAPU-Valledor Tres",
            "code" => "113810",
            "comuna_id" => 13116
        ],
        [
            "name" => "SAPU-Dr. Carlos Lorca",
            "code" => "113812",
            "comuna_id" => 13105
        ],
        [
            "name" => "SAPU-Raúl Cuevas (Ex-San Bernardo)",
            "code" => "113813",
            "comuna_id" => 13401
        ],
        [
            "name" => "SAPU-Cóndores de Chile",
            "code" => "113814",
            "comuna_id" => 13105
        ],
        [
            "name" => "SAPU-Confraternidad",
            "code" => "113815",
            "comuna_id" => 13401
        ],
        [
            "name" => "SAPU-Paine",
            "code" => "113818",
            "comuna_id" => 13404
        ],
        [
            "name" => "SAPU-Dra. Mariela Salgado",
            "code" => "113820",
            "comuna_id" => 13116
        ],
        [
            "name" => "SAPU-Santa Teresa de Los Andes",
            "code" => "113822",
            "comuna_id" => 13129
        ],
        [
            "name" => "SAPU-Laura Vicuña",
            "code" => "113823",
            "comuna_id" => 13105
        ],
        [
            "name" => "SAPU-Eduardo Frei Montalva",
            "code" => "113826",
            "comuna_id" => 13109
        ],
        [
            "name" => "SAPU-Padre Joan Alsina",
            "code" => "113828",
            "comuna_id" => 13401
        ],
        [
            "name" => "SAPU-Carol Urzúa de San Bernardo",
            "code" => "113829",
            "comuna_id" => 13401
        ],
        [
            "name" => "SAPU-Raúl Brañes F.",
            "code" => "113830",
            "comuna_id" => 13401
        ],
        [
            "name" => "SAPU-Edgardo Enríquez Froedden",
            "code" => "113831",
            "comuna_id" => 13121
        ],
        [
            "name" => "SAPU-Juan Pablo II",
            "code" => "113832",
            "comuna_id" => 13401
        ],
        [
            "name" => "SAPU-Buin",
            "code" => "113890",
            "comuna_id" => 13402
        ],
        [
            "name" => "Actividades gestionadas por la Dirección del Servicio para apoyo de la Red (S.S Metropolitano Sur Oriente)",
            "code" => "114010",
            "comuna_id" => 13201
        ],
        [
            "name" => "PRAIS (S.S Metropolitano Sur Oriente)",
            "code" => "114011",
            "comuna_id" => 13201
        ],
        [
            "name" => "Complejo Hospitalario Dr. Sótero del Río (Santiago, Puente Alto)",
            "code" => "114101",
            "comuna_id" => 13201
        ],
        [
            "name" => "Hospital San José de Maipo",
            "code" => "114102",
            "comuna_id" => 13203
        ],
        [
            "name" => "Hospital Padre Alberto Hurtado (San Ramón)",
            "code" => "114103",
            "comuna_id" => 13131
        ],
        [
            "name" => "Hospital Metropolitano (Ex Militar, Santiago, Providencia)",
            "code" => "114104",
            "comuna_id" => 13123
        ],
        [
            "name" => "Hospital Clínico Metropolitano La Florida Dra. Eloisa Díaz Inzunza",
            "code" => "114105",
            "comuna_id" => 13110
        ],
        [
            "name" => "Centro de Referencia de Salud San Rafael",
            "code" => "114150",
            "comuna_id" => 13110
        ],
        [
            "name" => "Centro Metropolitano de Sangre y Tejidos",
            "code" => "114161",
            "comuna_id" => 13123
        ],
        [
            "name" => "Clínica Psiquiatrica Raquel Gaete",
            "code" => "114202",
            "comuna_id" => 13201
        ],
        [
            "name" => "Clínica Salud Ltda.",
            "code" => "114203",
            "comuna_id" => 13110
        ],
        [
            "name" => "Centro de Enfermedades Respiratorias Infantiles Josefina Martínez (D)",
            "code" => "114204",
            "comuna_id" => 13201
        ],
        [
            "name" => "Centro de Rehabilitación Capredena",
            "code" => "114206",
            "comuna_id" => 13110
        ],
        [
            "name" => "Clínica Santa Elena",
            "code" => "114209",
            "comuna_id" => 13112
        ],
        [
            "name" => "Clínica Familia",
            "code" => "114212",
            "comuna_id" => 13110
        ],
        [
            "name" => "Centro Vida Integra de Puente Alto",
            "code" => "114215",
            "comuna_id" => 13201
        ],
        [
            "name" => "Centro de Salud Mutual CChC La Florida",
            "code" => "114220",
            "comuna_id" => 13110
        ],
        [
            "name" => "Centro Integramédica Tobalaba",
            "code" => "114221",
            "comuna_id" => 13201
        ],
        [
            "name" => "Centro Integramédica La Florida",
            "code" => "114222",
            "comuna_id" => 13110
        ],
        [
            "name" => "Clínica Vespucio",
            "code" => "114223",
            "comuna_id" => 13110
        ],
        [
            "name" => "Centro Vida Integra de La Florida",
            "code" => "114224",
            "comuna_id" => 13110
        ],
        [
            "name" => "Clínica Astra La Florida",
            "code" => "114227",
            "comuna_id" => 13110
        ],
        [
            "name" => "Centro Asistencial AChS La Florida",
            "code" => "114228",
            "comuna_id" => 13110
        ],
        [
            "name" => "Centro Asistencial AChS Puente Alto",
            "code" => "114229",
            "comuna_id" => 13201
        ],
        [
            "name" => "Clínica Astra Puente Alto",
            "code" => "114230",
            "comuna_id" => 13201
        ],
        [
            "name" => "Centro Médico y Dental Megasalud La Florida",
            "code" => "114231",
            "comuna_id" => 13110
        ],
        [
            "name" => "Centro Médico y Dental Megasalud Puente Alto",
            "code" => "114232",
            "comuna_id" => 13201
        ],
        [
            "name" => "Laboratorio Vida Integra",
            "code" => "114233",
            "comuna_id" => 13110
        ],
        [
            "name" => "Centro de Salud Mutual CChC Puente Alto",
            "code" => "114234",
            "comuna_id" => 13201
        ],
        [
            "name" => "Laboratorio Medicina Nuclear Sur Ltda",
            "code" => "114235",
            "comuna_id" => 13201
        ],
        [
            "name" => "Integramédica Puente Alto",
            "code" => "114236",
            "comuna_id" => 13201
        ],
        [
            "name" => "Consultorio Dr. Alejandro del Río",
            "code" => "114301",
            "comuna_id" => 13201
        ],
        [
            "name" => "Centro de Salud Familiar Los Castaños",
            "code" => "114302",
            "comuna_id" => 13110
        ],
        [
            "name" => "Centro de Salud Familiar Bellavista",
            "code" => "114303",
            "comuna_id" => 13110
        ],
        [
            "name" => "Centro de Salud Familiar Villa O'Higgins",
            "code" => "114304",
            "comuna_id" => 13110
        ],
        [
            "name" => "Centro de Salud Familiar Los Quillayes",
            "code" => "114305",
            "comuna_id" => 13110
        ],
        [
            "name" => "Centro de Salud Familiar La Granja",
            "code" => "114306",
            "comuna_id" => 13111
        ],
        [
            "name" => "Centro de Salud Familiar La Bandera",
            "code" => "114307",
            "comuna_id" => 13131
        ],
        [
            "name" => "Centro de Salud Familiar San Rafael (La Pintana)",
            "code" => "114308",
            "comuna_id" => 13112
        ],
        [
            "name" => "Centro de Salud Familiar Pablo de Rokha",
            "code" => "114309",
            "comuna_id" => 13112
        ],
        [
            "name" => "Centro de Salud Familiar Dr. José Manuel Balmaceda",
            "code" => "114310",
            "comuna_id" => 13202
        ],
        [
            "name" => "Centro de Salud Familiar Santiago de Nueva Extremadura",
            "code" => "114311",
            "comuna_id" => 13112
        ],
        [
            "name" => "Centro de Salud Familiar San Gerónimo",
            "code" => "114312",
            "comuna_id" => 13201
        ],
        [
            "name" => "Centro de Salud Familiar Vista Hermosa",
            "code" => "114313",
            "comuna_id" => 13201
        ],
        [
            "name" => "Consultorio San Ramón",
            "code" => "114314",
            "comuna_id" => 13131
        ],
        [
            "name" => "Centro de Salud Familiar Malaquías Concha",
            "code" => "114315",
            "comuna_id" => 13111
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Fernando Maffioletti",
            "code" => "114316",
            "comuna_id" => 13110
        ],
        [
            "name" => "Centro de Salud Familiar Santo Tomás",
            "code" => "114317",
            "comuna_id" => 13112
        ],
        [
            "name" => "Centro de Salud Familiar Flor Fernández",
            "code" => "114318",
            "comuna_id" => 13112
        ],
        [
            "name" => "Centro de Salud Familiar El Roble",
            "code" => "114319",
            "comuna_id" => 13112
        ],
        [
            "name" => "Centro de Salud Familiar Bernardo Leighton",
            "code" => "114320",
            "comuna_id" => 13201
        ],
        [
            "name" => "Centro de Salud Familiar Cardenal Silva Henríquez de Puente Alto",
            "code" => "114321",
            "comuna_id" => 13201
        ],
        [
            "name" => "Centro de Salud Familiar Padre Manuel Villaseca",
            "code" => "114322",
            "comuna_id" => 13201
        ],
        [
            "name" => "Centro de Salud Familiar Madre Teresa de Calcuta (Organizaciones sin fines de lucro y ONG)",
            "code" => "114323",
            "comuna_id" => 13201
        ],
        [
            "name" => "Centro de Salud Familiar Santa Amalia",
            "code" => "114324",
            "comuna_id" => 13110
        ],
        [
            "name" => "Centro de Salud Familiar Granja Sur",
            "code" => "114325",
            "comuna_id" => 13111
        ],
        [
            "name" => "Centro de Salud Familiar Karol Wojtyla",
            "code" => "114326",
            "comuna_id" => 13201
        ],
        [
            "name" => "Centro de Salud Familiar Juan Pablo II",
            "code" => "114327",
            "comuna_id" => 13112
        ],
        [
            "name" => "Centro de Salud Familiar Poetisa Gabriela Mistral",
            "code" => "114328",
            "comuna_id" => 13131
        ],
        [
            "name" => "Centro de Salud Familiar San Alberto Hurtado",
            "code" => "114329",
            "comuna_id" => 13201
        ],
        [
            "name" => "Centro de Salud Familiar Trinidad",
            "code" => "114330",
            "comuna_id" => 13110
        ],
        [
            "name" => "Centro de Salud Familiar La Florida",
            "code" => "114331",
            "comuna_id" => 13110
        ],
        [
            "name" => "Centro de Salud Familiar Laurita Vicuña",
            "code" => "114332",
            "comuna_id" => 13201
        ],
        [
            "name" => "Centro de Salud Rural El Principal",
            "code" => "114333",
            "comuna_id" => 13202
        ],
        [
            "name" => "Centro de Salud Familiar José Alvo",
            "code" => "114334",
            "comuna_id" => 13110
        ],
        [
            "name" => "Posta de Salud Rural Puntilla",
            "code" => "114401",
            "comuna_id" => 13202
        ],
        [
            "name" => "Posta de Salud Rural Santa Rita",
            "code" => "114403",
            "comuna_id" => 13202
        ],
        [
            "name" => "Posta de Salud Rural San Vicente",
            "code" => "114406",
            "comuna_id" => 13202
        ],
        [
            "name" => "Posta de Salud Rural Las Vertientes",
            "code" => "114407",
            "comuna_id" => 13203
        ],
        [
            "name" => "Posta de Salud Rural El Volcán",
            "code" => "114408",
            "comuna_id" => 13203
        ],
        [
            "name" => "Posta de Salud Rural Las Perdices",
            "code" => "114409",
            "comuna_id" => 13110
        ],
        [
            "name" => "Posta de Salud Rural San Gabriel",
            "code" => "114410",
            "comuna_id" => 13203
        ],
        [
            "name" => "COSAM La Bandera",
            "code" => "114606",
            "comuna_id" => 13131
        ],
        [
            "name" => "COSAM La Rinconada",
            "code" => "114607",
            "comuna_id" => 13131
        ],
        [
            "name" => "COSAM La Granja",
            "code" => "114608",
            "comuna_id" => 13111
        ],
        [
            "name" => "COSAM La Pintana",
            "code" => "114609",
            "comuna_id" => 13112
        ],
        [
            "name" => "COSAM La Florida",
            "code" => "114610",
            "comuna_id" => 13110
        ],
        [
            "name" => "COSAM Puente Alto",
            "code" => "114611",
            "comuna_id" => 13201
        ],
        [
            "name" => "COSAM Pirque",
            "code" => "114612",
            "comuna_id" => 13202
        ],
        [
            "name" => "COSAM CEIF Puente Alto",
            "code" => "114613",
            "comuna_id" => 13201
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Millalemu",
            "code" => "114706",
            "comuna_id" => 13111
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Modelo",
            "code" => "114714",
            "comuna_id" => 13131
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar San Gregorio",
            "code" => "114796",
            "comuna_id" => 13111
        ],
        [
            "name" => "SAPU-Dr. Alejandro del Río",
            "code" => "114801",
            "comuna_id" => 13201
        ],
        [
            "name" => "SAPU-Los Castaños",
            "code" => "114802",
            "comuna_id" => 13110
        ],
        [
            "name" => "SAPU-Villa O'Higgins",
            "code" => "114804",
            "comuna_id" => 13110
        ],
        [
            "name" => "SAPU-Los Quillayes",
            "code" => "114805",
            "comuna_id" => 13110
        ],
        [
            "name" => "SAPU-La Granja",
            "code" => "114806",
            "comuna_id" => 13111
        ],
        [
            "name" => "SAPU-La Bandera",
            "code" => "114807",
            "comuna_id" => 13131
        ],
        [
            "name" => "SAPU-San Rafael",
            "code" => "114808",
            "comuna_id" => 13112
        ],
        [
            "name" => "SAPU-Pablo de Rokha",
            "code" => "114809",
            "comuna_id" => 13112
        ],
        [
            "name" => "SAPU-Santiago de Nueva Extremadura",
            "code" => "114811",
            "comuna_id" => 13112
        ],
        [
            "name" => "SAPU-San Gerónimo",
            "code" => "114812",
            "comuna_id" => 13201
        ],
        [
            "name" => "SAPU-San Ramón",
            "code" => "114814",
            "comuna_id" => 13131
        ],
        [
            "name" => "SAPU-Dr. Fernando Maffioletti",
            "code" => "114816",
            "comuna_id" => 13110
        ],
        [
            "name" => "SAPU-Santo Tomás",
            "code" => "114817",
            "comuna_id" => 13112
        ],
        [
            "name" => "SAPU-El Roble",
            "code" => "114819",
            "comuna_id" => 13112
        ],
        [
            "name" => "SAPU-Bernardo Leighton",
            "code" => "114820",
            "comuna_id" => 13201
        ],
        [
            "name" => "SAPU-Cardenal Silva Henríquez de Puente Alto",
            "code" => "114821",
            "comuna_id" => 13201
        ],
        [
            "name" => "SAPU-Padre Manuel Villaseca",
            "code" => "114822",
            "comuna_id" => 13201
        ],
        [
            "name" => "SAPU-Santa Amalia",
            "code" => "114824",
            "comuna_id" => 13110
        ],
        [
            "name" => "SAPU-Granja Sur",
            "code" => "114825",
            "comuna_id" => 13111
        ],
        [
            "name" => "SAPU-Karol Wojtyla",
            "code" => "114826",
            "comuna_id" => 13201
        ],
        [
            "name" => "SAPU-Poetisa Gabriela Mistral",
            "code" => "114828",
            "comuna_id" => 13131
        ],
        [
            "name" => "SAPU-La Florida",
            "code" => "114831",
            "comuna_id" => 13110
        ],
        [
            "name" => "Actividades gestionadas por la Dirección del Servicio para apoyo de la Red (S.S Del Libertador Bernardo O'Higgins)",
            "code" => "115010",
            "comuna_id" => 6101
        ],
        [
            "name" => "PRAIS (S.S Del Libertador Bernardo O'Higgins)",
            "code" => "115011",
            "comuna_id" => 6101
        ],
        [
            "name" => "Clínica Dental Móvil Triple. Pat. PW4103 (Rancagua)",
            "code" => "115012",
            "comuna_id" => 6101
        ],
        [
            "name" => "Hospital Regional de Rancagua",
            "code" => "115100",
            "comuna_id" => 6101
        ],
        [
            "name" => "Hospital Santa Filomena (Graneros)",
            "code" => "115101",
            "comuna_id" => 6106
        ],
        [
            "name" => "Hospital de Coínco",
            "code" => "115102",
            "comuna_id" => 6103
        ],
        [
            "name" => "Hospital Del Salvador (Peumo)",
            "code" => "115103",
            "comuna_id" => 6112
        ],
        [
            "name" => "Hospital Dr. Ricardo Valenzuela Sáez (Rengo)",
            "code" => "115104",
            "comuna_id" => 6115
        ],
        [
            "name" => "Hospital San Vicente de Tagua-Tagua",
            "code" => "115105",
            "comuna_id" => 6117
        ],
        [
            "name" => "Hospital de Pichidegua",
            "code" => "115106",
            "comuna_id" => 6113
        ],
        [
            "name" => "Hospital San Juan de Dios (San Fernando)",
            "code" => "115107",
            "comuna_id" => 6301
        ],
        [
            "name" => "Hospital Mercedes (Chimbarongo)",
            "code" => "115108",
            "comuna_id" => 6303
        ],
        [
            "name" => "Hospital de Nancagua",
            "code" => "115109",
            "comuna_id" => 6305
        ],
        [
            "name" => "Hospital de Santa Cruz",
            "code" => "115110",
            "comuna_id" => 6310
        ],
        [
            "name" => "Hospital de Marchigüe",
            "code" => "115111",
            "comuna_id" => 6204
        ],
        [
            "name" => "Hospital de Pichilemu",
            "code" => "115112",
            "comuna_id" => 6201
        ],
        [
            "name" => "Hospital de Lolol",
            "code" => "115113",
            "comuna_id" => 6304
        ],
        [
            "name" => "Hospital de Litueche",
            "code" => "115114",
            "comuna_id" => 6203
        ],
        [
            "name" => "Hospital del Trabajador AChS",
            "code" => "115202",
            "comuna_id" => 6101
        ],
        [
            "name" => "Clínica Mutual de Seguridad CChC Rancagua",
            "code" => "115203",
            "comuna_id" => 6101
        ],
        [
            "name" => "Clínica del Trabajador AChS San Fernando",
            "code" => "115204",
            "comuna_id" => 6301
        ],
        [
            "name" => "Hospital Clínico Fusat  Rancagua",
            "code" => "115206",
            "comuna_id" => 6101
        ],
        [
            "name" => "Vacunatorio Neumann & Bertin Ltda.",
            "code" => "115214",
            "comuna_id" => 6301
        ],
        [
            "name" => "Clínica Isamedica",
            "code" => "115221",
            "comuna_id" => 6101
        ],
        [
            "name" => "Clínica de Salud Integral",
            "code" => "115222",
            "comuna_id" => 6101
        ],
        [
            "name" => "Clínica Mella",
            "code" => "115231",
            "comuna_id" => 6101
        ],
        [
            "name" => "Centro Intersalud Rancagua",
            "code" => "115235",
            "comuna_id" => 6101
        ],
        [
            "name" => "Megasalud S.A. Centro Médico y Dental Rancagua",
            "code" => "115236",
            "comuna_id" => 6101
        ],
        [
            "name" => "Hospital  Penitenciario de Rancagua",
            "code" => "115241",
            "comuna_id" => 6101
        ],
        [
            "name" => "Centro Médico Dental Tipo B",
            "code" => "115242",
            "comuna_id" => 6101
        ],
        [
            "name" => "Centro Médico O'Carrol Salud",
            "code" => "115243",
            "comuna_id" => 6101
        ],
        [
            "name" => "Laboratorio Clínico Alemán",
            "code" => "115244",
            "comuna_id" => 6101
        ],
        [
            "name" => "Laboratorio Guillermo Mejías",
            "code" => "115246",
            "comuna_id" => 6101
        ],
        [
            "name" => "Laboratorio Torre Médica",
            "code" => "115247",
            "comuna_id" => 6101
        ],
        [
            "name" => "Laboratorio San Lucas",
            "code" => "115248",
            "comuna_id" => 6101
        ],
        [
            "name" => "Laboratorio Clínico Pasteur",
            "code" => "115249",
            "comuna_id" => 6101
        ],
        [
            "name" => "Centro Médico Lantadilla",
            "code" => "115250",
            "comuna_id" => 6101
        ],
        [
            "name" => "Laboratorio Vita Nova Alameda",
            "code" => "115251",
            "comuna_id" => 6101
        ],
        [
            "name" => "Laboratorio Clínico Indira (Colon)",
            "code" => "115252",
            "comuna_id" => 6101
        ],
        [
            "name" => "Laboratorio Clínico del Carmen",
            "code" => "115253",
            "comuna_id" => 6117
        ],
        [
            "name" => "Laboratorio Márquez y Guajardo Ltda.",
            "code" => "115254",
            "comuna_id" => 6117
        ],
        [
            "name" => "Laboratorio Medisalud",
            "code" => "115256",
            "comuna_id" => 6117
        ],
        [
            "name" => "Laboratorio Clínico Coloma",
            "code" => "115257",
            "comuna_id" => 6301
        ],
        [
            "name" => "Laboratorio Clínico Los Peumos",
            "code" => "115258",
            "comuna_id" => 6301
        ],
        [
            "name" => "Laboratorio Clínico Virginia Sáenz Fuenzalida",
            "code" => "115259",
            "comuna_id" => 6301
        ],
        [
            "name" => "Laboratorio Clínico Salud Plus",
            "code" => "115260",
            "comuna_id" => 6303
        ],
        [
            "name" => "Laboratorio Santa Cruz",
            "code" => "115261",
            "comuna_id" => 6310
        ],
        [
            "name" => "Laboratorio Centrolab",
            "code" => "115262",
            "comuna_id" => 6310
        ],
        [
            "name" => "Laboratorio Clínico Análisis",
            "code" => "115263",
            "comuna_id" => 6310
        ],
        [
            "name" => "Laboratorio Oscar Zúñiga Serrano",
            "code" => "115264",
            "comuna_id" => 6115
        ],
        [
            "name" => "Laboratorio Clinilab",
            "code" => "115265",
            "comuna_id" => 6115
        ],
        [
            "name" => "Clínica San Francisco",
            "code" => "115266",
            "comuna_id" => 6301
        ],
        [
            "name" => "Laboratorio Clínico San Vicente",
            "code" => "115267",
            "comuna_id" => 6117
        ],
        [
            "name" => "Laboratorio Clínico Bionet (Rancagua)",
            "code" => "115268",
            "comuna_id" => 6101
        ],
        [
            "name" => "Laboratorio Clínico CORMUN de Rancagua",
            "code" => "115269",
            "comuna_id" => 6101
        ],
        [
            "name" => "Laboratorio Clínico Labdiagnotic",
            "code" => "115270",
            "comuna_id" => 6101
        ],
        [
            "name" => "Centro de Salud y Prevención AChS San Vicente de Tagua Tagua",
            "code" => "115271",
            "comuna_id" => 6117
        ],
        [
            "name" => "Policlínico de la Asociación Chilena de Seguridad AChS Santa Cruz",
            "code" => "115272",
            "comuna_id" => 6310
        ],
        [
            "name" => "Policlínico de la Asociación Chilena de Seguridad AChS Rengo",
            "code" => "115273",
            "comuna_id" => 6115
        ],
        [
            "name" => "Centro de Salud Familiar Enrique Dintrans (N° 1)",
            "code" => "115300",
            "comuna_id" => 6101
        ],
        [
            "name" => "Centro de Salud Familiar Eduardo Geyter (N° 2)",
            "code" => "115301",
            "comuna_id" => 6101
        ],
        [
            "name" => "Centro de Salud Familiar Abel Zapata (N° 3)",
            "code" => "115302",
            "comuna_id" => 6101
        ],
        [
            "name" => "Centro de Salud Familiar María Latiffe (N° 4)",
            "code" => "115303",
            "comuna_id" => 6101
        ],
        [
            "name" => "Centro de Salud Familiar Juan Chiorrini (N° 5)",
            "code" => "115304",
            "comuna_id" => 6101
        ],
        [
            "name" => "Centro de Salud Familiar Machalí",
            "code" => "115305",
            "comuna_id" => 6108
        ],
        [
            "name" => "Centro de Salud Familiar San Francisco Mostazal",
            "code" => "115306",
            "comuna_id" => 6110
        ],
        [
            "name" => "Centro de Salud Familiar Codegua",
            "code" => "115307",
            "comuna_id" => 6102
        ],
        [
            "name" => "Centro de Salud Familiar Doñihue",
            "code" => "115308",
            "comuna_id" => 6105
        ],
        [
            "name" => "Centro de Salud Familiar Coltauco",
            "code" => "115309",
            "comuna_id" => 6104
        ],
        [
            "name" => "Centro de Salud Familiar Requínoa",
            "code" => "115310",
            "comuna_id" => 6116
        ],
        [
            "name" => "Centro de Salud Familiar Las Cabras",
            "code" => "115311",
            "comuna_id" => 6107
        ],
        [
            "name" => "Centro de Salud Familiar Quinta de Tilcoco",
            "code" => "115312",
            "comuna_id" => 6114
        ],
        [
            "name" => "Centro de Salud Familiar Peralillo",
            "code" => "115313",
            "comuna_id" => 6307
        ],
        [
            "name" => "Centro de Salud Familiar La Estrella",
            "code" => "115314",
            "comuna_id" => 6202
        ],
        [
            "name" => "Centro de Salud Familiar Chépica",
            "code" => "115315",
            "comuna_id" => 6302
        ],
        [
            "name" => "Centro de Salud Familiar Paredones",
            "code" => "115316",
            "comuna_id" => 6206
        ],
        [
            "name" => "Centro de Salud Familiar Chacabuco",
            "code" => "115317",
            "comuna_id" => 6301
        ],
        [
            "name" => "Consultorio Placilla (Placilla)",
            "code" => "115318",
            "comuna_id" => 6308
        ],
        [
            "name" => "Centro de Salud Familiar Santa Cruz",
            "code" => "115319",
            "comuna_id" => 6310
        ],
        [
            "name" => "Centro de Salud Familiar Valle Mar",
            "code" => "115320",
            "comuna_id" => 6205
        ],
        [
            "name" => "Centro de Salud Familiar Lo Miranda",
            "code" => "115321",
            "comuna_id" => 6105
        ],
        [
            "name" => "Centro de Salud Familiar Rosario",
            "code" => "115322",
            "comuna_id" => 6115
        ],
        [
            "name" => "Centro de Salud Familiar Oriente de San Fernando",
            "code" => "115323",
            "comuna_id" => 6301
        ],
        [
            "name" => "Centro de Salud Familiar N° 6",
            "code" => "115324",
            "comuna_id" => 6101
        ],
        [
            "name" => "Centro de Salud Familiar de Malloa",
            "code" => "115325",
            "comuna_id" => 6109
        ],
        [
            "name" => "Centro de Salud Familiar de Pelequen",
            "code" => "115326",
            "comuna_id" => 6109
        ],
        [
            "name" => "Centro de Salud Familiar Olivar Alto",
            "code" => "115327",
            "comuna_id" => 6111
        ],
        [
            "name" => "Centro de Salud Familiar Cunaco",
            "code" => "115328",
            "comuna_id" => 6305
        ],
        [
            "name" => "Centro de Salud Familiar Rengo",
            "code" => "115329",
            "comuna_id" => 6115
        ],
        [
            "name" => "Centro de Salud Familiar Gultro",
            "code" => "115330",
            "comuna_id" => 6111
        ],
        [
            "name" => "Centro de Salud Familiar La Esperanza",
            "code" => "115331",
            "comuna_id" => 6112
        ],
        [
            "name" => "Centro de Referencia de Salud La Brújula",
            "code" => "115351",
            "comuna_id" => 6101
        ],
        [
            "name" => "Posta de Salud Rural Coya",
            "code" => "115400",
            "comuna_id" => 6108
        ],
        [
            "name" => "Posta de Salud Rural La Punta",
            "code" => "115401",
            "comuna_id" => 6110
        ],
        [
            "name" => "Posta de Salud Rural El Carmen ( Las Cabras)",
            "code" => "115404",
            "comuna_id" => 6107
        ],
        [
            "name" => "Posta de Salud Rural Idahue",
            "code" => "115405",
            "comuna_id" => 6104
        ],
        [
            "name" => "Posta de Salud Rural Rinconada de Parral",
            "code" => "115406",
            "comuna_id" => 6104
        ],
        [
            "name" => "Posta de Salud Rural Lo de Cuevas",
            "code" => "115407",
            "comuna_id" => 6104
        ],
        [
            "name" => "Posta de Salud Rural El Abra",
            "code" => "115409",
            "comuna_id" => 6116
        ],
        [
            "name" => "Posta de Salud Rural Totihue",
            "code" => "115410",
            "comuna_id" => 6116
        ],
        [
            "name" => "Posta de Salud Rural Los Lirios",
            "code" => "115411",
            "comuna_id" => 6116
        ],
        [
            "name" => "Posta de Salud Rural La Panchina",
            "code" => "115412",
            "comuna_id" => 6107
        ],
        [
            "name" => "Posta de Salud Rural La Cebada",
            "code" => "115413",
            "comuna_id" => 6107
        ],
        [
            "name" => "Posta de Salud Rural Santa Inés",
            "code" => "115414",
            "comuna_id" => 6107
        ],
        [
            "name" => "Posta de Salud Rural El Manzano",
            "code" => "115415",
            "comuna_id" => 6107
        ],
        [
            "name" => "Posta de Salud Rural Llallauquén",
            "code" => "115416",
            "comuna_id" => 6107
        ],
        [
            "name" => "Posta de Salud Rural Popeta",
            "code" => "115417",
            "comuna_id" => 6115
        ],
        [
            "name" => "Posta de Salud Rural Cerrillos (Rengo)",
            "code" => "115418",
            "comuna_id" => 6115
        ],
        [
            "name" => "Posta de Salud Rural Corcolén",
            "code" => "115419",
            "comuna_id" => 6109
        ],
        [
            "name" => "Posta de Salud Rural Lo de Lobos",
            "code" => "115420",
            "comuna_id" => 6115
        ],
        [
            "name" => "Posta de Salud Rural Las Viñas",
            "code" => "115421",
            "comuna_id" => 6206
        ],
        [
            "name" => "Posta de Salud Rural Zúñiga",
            "code" => "115424",
            "comuna_id" => 6117
        ],
        [
            "name" => "Posta de Salud Rural Pencahue",
            "code" => "115425",
            "comuna_id" => 6117
        ],
        [
            "name" => "Posta de Salud Rural Rinconada",
            "code" => "115426",
            "comuna_id" => 6117
        ],
        [
            "name" => "Posta de Salud Rural El Tambo",
            "code" => "115427",
            "comuna_id" => 6117
        ],
        [
            "name" => "Posta de Salud Rural Larmahue",
            "code" => "115428",
            "comuna_id" => 6113
        ],
        [
            "name" => "Posta de Salud Rural Santa Amelia",
            "code" => "115429",
            "comuna_id" => 6113
        ],
        [
            "name" => "Posta de Salud Rural Patagua Orilla",
            "code" => "115430",
            "comuna_id" => 6113
        ],
        [
            "name" => "Posta de Salud Rural Patagua Cerro",
            "code" => "115431",
            "comuna_id" => 6113
        ],
        [
            "name" => "Posta de Salud Rural Roma",
            "code" => "115432",
            "comuna_id" => 6301
        ],
        [
            "name" => "Posta de Salud Rural El Durazno (Las Cabras)",
            "code" => "115433",
            "comuna_id" => 6107
        ],
        [
            "name" => "Posta de Salud Rural Puente Negro",
            "code" => "115434",
            "comuna_id" => 6301
        ],
        [
            "name" => "Posta de Salud Rural La Dehesa",
            "code" => "115435",
            "comuna_id" => 6308
        ],
        [
            "name" => "Posta de Salud Rural Agua Buena",
            "code" => "115436",
            "comuna_id" => 6301
        ],
        [
            "name" => "Posta de Salud Rural Tinguiririca",
            "code" => "115437",
            "comuna_id" => 6303
        ],
        [
            "name" => "Posta de Salud Rural Huemul (Chimbarongo)",
            "code" => "115438",
            "comuna_id" => 6303
        ],
        [
            "name" => "Posta de Salud Rural Codegua",
            "code" => "115439",
            "comuna_id" => 6303
        ],
        [
            "name" => "Posta de Salud Rural San Juan de La Sierra",
            "code" => "115440",
            "comuna_id" => 6303
        ],
        [
            "name" => "Posta de Salud Rural Yáquil",
            "code" => "115441",
            "comuna_id" => 6305
        ],
        [
            "name" => "Posta de Salud Rural Puquillay Bajo",
            "code" => "115442",
            "comuna_id" => 6305
        ],
        [
            "name" => "Posta de Salud Rural Quinahue",
            "code" => "115443",
            "comuna_id" => 6310
        ],
        [
            "name" => "Posta de Salud Rural Isla de Yáquil",
            "code" => "115444",
            "comuna_id" => 6310
        ],
        [
            "name" => "Consultorio General Rural Palmilla",
            "code" => "115445",
            "comuna_id" => 6306
        ],
        [
            "name" => "Posta de Salud Rural Pupilla",
            "code" => "115446",
            "comuna_id" => 6306
        ],
        [
            "name" => "Posta de Salud Rural San José del Carmen",
            "code" => "115447",
            "comuna_id" => 6306
        ],
        [
            "name" => "Posta de Salud Rural Santa Irene",
            "code" => "115448",
            "comuna_id" => 6306
        ],
        [
            "name" => "Posta de Salud Rural Apalta",
            "code" => "115449",
            "comuna_id" => 6310
        ],
        [
            "name" => "Posta de Salud Rural Guindo Alto",
            "code" => "115450",
            "comuna_id" => 6310
        ],
        [
            "name" => "Posta de Salud Rural Pumanque",
            "code" => "115452",
            "comuna_id" => 6309
        ],
        [
            "name" => "Posta de Salud Rural Población",
            "code" => "115453",
            "comuna_id" => 6307
        ],
        [
            "name" => "Posta de Salud Rural Los Cardos",
            "code" => "115454",
            "comuna_id" => 6307
        ],
        [
            "name" => "Posta de Salud Rural Molineros",
            "code" => "115455",
            "comuna_id" => 6309
        ],
        [
            "name" => "Posta de Salud Rural Calleuque",
            "code" => "115456",
            "comuna_id" => 6307
        ],
        [
            "name" => "Posta de Salud Rural Pailimo",
            "code" => "115457",
            "comuna_id" => 6204
        ],
        [
            "name" => "Posta de Salud Rural Cahuil",
            "code" => "115458",
            "comuna_id" => 6201
        ],
        [
            "name" => "Posta de Salud Rural El Membrillo",
            "code" => "115459",
            "comuna_id" => 6304
        ],
        [
            "name" => "Posta de Salud Rural Pupuya",
            "code" => "115460",
            "comuna_id" => 6205
        ],
        [
            "name" => "Posta de Salud Rural Alto Ramírez",
            "code" => "115461",
            "comuna_id" => 6201
        ],
        [
            "name" => "Posta de Salud Rural Rapel (Navidad)",
            "code" => "115462",
            "comuna_id" => 6205
        ],
        [
            "name" => "Posta de Salud Rural Quelentaro",
            "code" => "115463",
            "comuna_id" => 6203
        ],
        [
            "name" => "Posta de Salud Rural San Vicente de Pucalán",
            "code" => "115464",
            "comuna_id" => 6205
        ],
        [
            "name" => "Posta de Salud Rural Auquinco",
            "code" => "115465",
            "comuna_id" => 6302
        ],
        [
            "name" => "Posta de Salud Rural Orilla de Auquinco",
            "code" => "115466",
            "comuna_id" => 6302
        ],
        [
            "name" => "Posta de Salud Rural Bucalemu (Paredones)",
            "code" => "115467",
            "comuna_id" => 6206
        ],
        [
            "name" => "Posta de Salud Rural San Pedro de Alcántara",
            "code" => "115468",
            "comuna_id" => 6206
        ],
        [
            "name" => "Posta de Salud Rural Rinconada de Alcones",
            "code" => "115469",
            "comuna_id" => 6204
        ],
        [
            "name" => "Posta de Salud Rural Candelaria ( Chépica)",
            "code" => "115470",
            "comuna_id" => 6302
        ],
        [
            "name" => "Posta de Salud Rural Puquillay Alto",
            "code" => "115471",
            "comuna_id" => 6305
        ],
        [
            "name" => "Posta de Salud Rural Lo Cartagena",
            "code" => "115472",
            "comuna_id" => 6115
        ],
        [
            "name" => "Posta de Salud Rural Nilahue Cornejo",
            "code" => "115473",
            "comuna_id" => 6309
        ],
        [
            "name" => "Posta de Salud Rural Cardonal de Panilonco",
            "code" => "115474",
            "comuna_id" => 6201
        ],
        [
            "name" => "Posta de Salud Rural Ranguil",
            "code" => "115475",
            "comuna_id" => 6304
        ],
        [
            "name" => "Posta de Salud Rural San Roberto",
            "code" => "115476",
            "comuna_id" => 6113
        ],
        [
            "name" => "Posta de Salud Rural San José de Marchigue",
            "code" => "115477",
            "comuna_id" => 6113
        ],
        [
            "name" => "Posta de Salud Rural Lo Moscoso",
            "code" => "115478",
            "comuna_id" => 6308
        ],
        [
            "name" => "Posta de Salud Rural Pulin",
            "code" => "115479",
            "comuna_id" => 6203
        ],
        [
            "name" => "Posta de Salud Rural La Cabaña",
            "code" => "115480",
            "comuna_id" => 6304
        ],
        [
            "name" => "Posta de Salud Rural Olivar Bajo",
            "code" => "115481",
            "comuna_id" => 6111
        ],
        [
            "name" => "Posta de Salud Rural Peor Es Nada",
            "code" => "115482",
            "comuna_id" => 6303
        ],
        [
            "name" => "Posta de Salud Rural Cocalan",
            "code" => "115483",
            "comuna_id" => 6107
        ],
        [
            "name" => "Posta de Salud Rural Idahue",
            "code" => "115484",
            "comuna_id" => 6117
        ],
        [
            "name" => "COSAM de Rancagua",
            "code" => "115600",
            "comuna_id" => 6101
        ],
        [
            "name" => "COSAM Santa Cruz",
            "code" => "115601",
            "comuna_id" => 6310
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar San Rafael",
            "code" => "115700",
            "comuna_id" => 6101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Dr. Eduardo de Geyter",
            "code" => "115701",
            "comuna_id" => 6101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Ciudad de Paju",
            "code" => "115703",
            "comuna_id" => 6101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Guacarhue",
            "code" => "115712",
            "comuna_id" => 6114
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Consultorio Chacabuco",
            "code" => "115717",
            "comuna_id" => 6301
        ],
        [
            "name" => "SAPU-Enrique Dintrans",
            "code" => "115800",
            "comuna_id" => 6101
        ],
        [
            "name" => "SAPU-Eduardo de Geyter",
            "code" => "115801",
            "comuna_id" => 6101
        ],
        [
            "name" => "SAPU-Abel Zapata",
            "code" => "115802",
            "comuna_id" => 6101
        ],
        [
            "name" => "SAPU-María Latiffe",
            "code" => "115803",
            "comuna_id" => 6101
        ],
        [
            "name" => "SAPU-Machalí",
            "code" => "115805",
            "comuna_id" => 6108
        ],
        [
            "name" => "SAPU-Oriente de San Fernando",
            "code" => "115823",
            "comuna_id" => 6301
        ],
        [
            "name" => "SAPU-René Schneider",
            "code" => "115850",
            "comuna_id" => 6101
        ],
        [
            "name" => "Actividades gestionadas por la Dirección del Servicio para apoyo de la Red (S.S Del Maule)",
            "code" => "116010",
            "comuna_id" => 7101
        ],
        [
            "name" => "PRAIS (S.S Del Maule)",
            "code" => "116011",
            "comuna_id" => 7101
        ],
        [
            "name" => "Clínica Dental Móvil (Talca)",
            "code" => "116012",
            "comuna_id" => 7101
        ],
        [
            "name" => "Hospital Militar de Campaña (Talca)",
            "code" => "116053",
            "comuna_id" => 7101
        ],
        [
            "name" => "Hospital de Campaña de Italia (Talca)",
            "code" => "116056",
            "comuna_id" => 7101
        ],
        [
            "name" => "Hospital San Juan de Dios (Curicó)",
            "code" => "116100",
            "comuna_id" => 7301
        ],
        [
            "name" => "Hospital de Teno",
            "code" => "116101",
            "comuna_id" => 7308
        ],
        [
            "name" => "Hospital de Molina",
            "code" => "116102",
            "comuna_id" => 7304
        ],
        [
            "name" => "Hospital de Hualañé",
            "code" => "116103",
            "comuna_id" => 7302
        ],
        [
            "name" => "Hospital de Licantén",
            "code" => "116104",
            "comuna_id" => 7303
        ],
        [
            "name" => "Hospital Dr. César Garavagno Burotto (Talca)",
            "code" => "116105",
            "comuna_id" => 7101
        ],
        [
            "name" => "Hospital de Curepto",
            "code" => "116106",
            "comuna_id" => 7103
        ],
        [
            "name" => "Hospital de Constitución",
            "code" => "116107",
            "comuna_id" => 7102
        ],
        [
            "name" => "Hospital Presidente Carlos Ibáñez del Campo (Linares)",
            "code" => "116108",
            "comuna_id" => 7401
        ],
        [
            "name" => "Hospital Dr. Abel Fuentealba Lagos de San Javier",
            "code" => "116109",
            "comuna_id" => 7406
        ],
        [
            "name" => "Hospital San José (Parral)",
            "code" => "116110",
            "comuna_id" => 7404
        ],
        [
            "name" => "Hospital San Juan de Dios (Cauquenes)",
            "code" => "116111",
            "comuna_id" => 7201
        ],
        [
            "name" => "Hospital Dr. Benjamín Pedreros (Chanco)",
            "code" => "116112",
            "comuna_id" => 7202
        ],
        [
            "name" => "Centro Reproductivo Regional de Sangre",
            "code" => "116150",
            "comuna_id" => 7101
        ],
        [
            "name" => "Centro CONIN Curicó",
            "code" => "116202",
            "comuna_id" => 7301
        ],
        [
            "name" => "Asociación Chilena de Seguridad AChS Talca",
            "code" => "116205",
            "comuna_id" => 7101
        ],
        [
            "name" => "Clínica del Maule",
            "code" => "116208",
            "comuna_id" => 7101
        ],
        [
            "name" => "Centro de Salud Mutual CChC Talca",
            "code" => "116209",
            "comuna_id" => 7101
        ],
        [
            "name" => "Asociación Chilena de Seguridad AChS Curicó",
            "code" => "116210",
            "comuna_id" => 7301
        ],
        [
            "name" => "Centro de Salud Mutual CChC Curicó",
            "code" => "116213",
            "comuna_id" => 7301
        ],
        [
            "name" => "Centro de Salud Mutual CChC Linares",
            "code" => "116215",
            "comuna_id" => 7401
        ],
        [
            "name" => "Centro de Salud Mutual CChC Constitución",
            "code" => "116216",
            "comuna_id" => 7102
        ],
        [
            "name" => "Clínica Enferdial",
            "code" => "116217",
            "comuna_id" => 7101
        ],
        [
            "name" => "Clínica Infantil",
            "code" => "116218",
            "comuna_id" => 7101
        ],
        [
            "name" => "Centro Médico Cordillera",
            "code" => "116219",
            "comuna_id" => 7101
        ],
        [
            "name" => "Vacunatorio Noemí Pérez",
            "code" => "116236",
            "comuna_id" => 7301
        ],
        [
            "name" => "Vacunatorio Enfermería Integral",
            "code" => "116237",
            "comuna_id" => 7301
        ],
        [
            "name" => "Megasalud S.A Centro Médico y Dental Talca",
            "code" => "116261",
            "comuna_id" => 7101
        ],
        [
            "name" => "Clínica Regional Lircay",
            "code" => "116262",
            "comuna_id" => 7101
        ],
        [
            "name" => "Clínica Regional de Curico",
            "code" => "116263",
            "comuna_id" => 7301
        ],
        [
            "name" => "Centro La Escalera",
            "code" => "116265",
            "comuna_id" => 7101
        ],
        [
            "name" => "Crea Chile",
            "code" => "116266",
            "comuna_id" => 7101
        ],
        [
            "name" => "Nexos Ltda.",
            "code" => "116267",
            "comuna_id" => 7101
        ],
        [
            "name" => "Asociación Chilena de Seguridad AChS Cauquenes",
            "code" => "116268",
            "comuna_id" => 7201
        ],
        [
            "name" => "Asociación Chilena de Seguridad AChS Parral",
            "code" => "116269",
            "comuna_id" => 7404
        ],
        [
            "name" => "Centro Médico y Dental de Carabineros de Chile VII Zona Maule",
            "code" => "116275",
            "comuna_id" => 7101
        ],
        [
            "name" => "Clínica Universidad Católica Del Maule",
            "code" => "116276",
            "comuna_id" => 7101
        ],
        [
            "name" => "Consultorio Prefectura Carabineros Curicó",
            "code" => "116277",
            "comuna_id" => 7301
        ],
        [
            "name" => "Consultorio Prefectura Carabineros Linares",
            "code" => "116278",
            "comuna_id" => 7401
        ],
        [
            "name" => "Centro de Salud Mutual CChC Cauquenes",
            "code" => "116279",
            "comuna_id" => 7201
        ],
        [
            "name" => "Centro De Salud Familiar A.S. Betty Muñoz Arce",
            "code" => "116300",
            "comuna_id" => 7301
        ],
        [
            "name" => "Centro de Salud Familiar Miguel Ángel Arenas López",
            "code" => "116301",
            "comuna_id" => 7301
        ],
        [
            "name" => "Centro de Salud Familiar Colón",
            "code" => "116302",
            "comuna_id" => 7301
        ],
        [
            "name" => "Centro de Salud Familiar Curicó",
            "code" => "116303",
            "comuna_id" => 7301
        ],
        [
            "name" => "Centro de Salud Familiar Lontué",
            "code" => "116304",
            "comuna_id" => 7304
        ],
        [
            "name" => "Centro de Salud Familiar José Dionisio Astaburuaga",
            "code" => "116305",
            "comuna_id" => 7101
        ],
        [
            "name" => "Centro de Salud Familiar La Florida",
            "code" => "116306",
            "comuna_id" => 7101
        ],
        [
            "name" => "Centro de Salud Familiar Julio Contardo Urzúa",
            "code" => "116307",
            "comuna_id" => 7101
        ],
        [
            "name" => "Centro de Salud Familiar Valentín Letelier",
            "code" => "116308",
            "comuna_id" => 7401
        ],
        [
            "name" => "Centro de Salud Familiar San Juan Dios de Linares",
            "code" => "116309",
            "comuna_id" => 7401
        ],
        [
            "name" => "Centro de Salud Familiar Villa Alegre",
            "code" => "116310",
            "comuna_id" => 7407
        ],
        [
            "name" => "Centro de Salud Familiar Arrau Méndez",
            "code" => "116311",
            "comuna_id" => 7404
        ],
        [
            "name" => "Centro de Salud Familiar Pencahue",
            "code" => "116312",
            "comuna_id" => 7107
        ],
        [
            "name" => "Centro de Salud Familiar San Clemente",
            "code" => "116313",
            "comuna_id" => 7109
        ],
        [
            "name" => "Centro de Salud Familiar Maule",
            "code" => "116314",
            "comuna_id" => 7105
        ],
        [
            "name" => "Centro de Salud Familiar Pelarco",
            "code" => "116315",
            "comuna_id" => 7106
        ],
        [
            "name" => "Centro de Salud Familiar Cumpeo",
            "code" => "116316",
            "comuna_id" => 7108
        ],
        [
            "name" => "Centro de Salud Familiar Colbún",
            "code" => "116317",
            "comuna_id" => 7402
        ],
        [
            "name" => "Centro de Salud Familiar Ignacio Carrera Pinto",
            "code" => "116318",
            "comuna_id" => 7408
        ],
        [
            "name" => "Centro de Salud Familiar Panimávida",
            "code" => "116319",
            "comuna_id" => 7402
        ],
        [
            "name" => "Centro de Salud Familiar Amanda Benavente",
            "code" => "116320",
            "comuna_id" => 7403
        ],
        [
            "name" => "Centro de Salud Familiar Marta Estévez",
            "code" => "116321",
            "comuna_id" => 7405
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Pedro Rivas Pinochet",
            "code" => "116322",
            "comuna_id" => 7203
        ],
        [
            "name" => "Centro de Salud Familiar Oscar Bonilla",
            "code" => "116323",
            "comuna_id" => 7401
        ],
        [
            "name" => "Centro de Salud Familiar San Rafael (San Rafael)",
            "code" => "116324",
            "comuna_id" => 7110
        ],
        [
            "name" => "Centro de Salud Familiar Sagrada Familia",
            "code" => "116325",
            "comuna_id" => 7307
        ],
        [
            "name" => "Centro de Salud Familiar Villa Prat",
            "code" => "116326",
            "comuna_id" => 7307
        ],
        [
            "name" => "Centro de Salud Familiar Vichuquén",
            "code" => "116327",
            "comuna_id" => 7309
        ],
        [
            "name" => "Centro de Salud Familiar Romeral",
            "code" => "116328",
            "comuna_id" => 7306
        ],
        [
            "name" => "Centro de Salud Familiar Armando Williams",
            "code" => "116329",
            "comuna_id" => 7201
        ],
        [
            "name" => "Centro de Salud Familiar Sarmiento",
            "code" => "116330",
            "comuna_id" => 7301
        ],
        [
            "name" => "Centro de Salud Familiar Carlos Trupp",
            "code" => "116331",
            "comuna_id" => 7101
        ],
        [
            "name" => "Centro de Salud Familiar Cerro Alto",
            "code" => "116332",
            "comuna_id" => 7102
        ],
        [
            "name" => "Centro de Salud Familiar Rauco",
            "code" => "116333",
            "comuna_id" => 7305
        ],
        [
            "name" => "Centro de Salud Familiar Empedrado",
            "code" => "116334",
            "comuna_id" => 7104
        ],
        [
            "name" => "Centro de Salud Familiar Morza",
            "code" => "116335",
            "comuna_id" => 7308
        ],
        [
            "name" => "Centro de Salud Familiar Comalle",
            "code" => "116336",
            "comuna_id" => 7308
        ],
        [
            "name" => "Centro de Salud Familiar Los Niches",
            "code" => "116338",
            "comuna_id" => 7301
        ],
        [
            "name" => "Centro de Salud Familiar Las Américas",
            "code" => "116340",
            "comuna_id" => 7101
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Ricardo Valdés Hurtado",
            "code" => "116341",
            "comuna_id" => 7201
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Carlos Díaz Gidi",
            "code" => "116342",
            "comuna_id" => 7406
        ],
        [
            "name" => "Centro de Salud Familiar Faustino González",
            "code" => "116343",
            "comuna_id" => 7101
        ],
        [
            "name" => "Posta de Salud Rural Limávida",
            "code" => "116400",
            "comuna_id" => 7103
        ],
        [
            "name" => "Posta de Salud Rural Monterilla",
            "code" => "116401",
            "comuna_id" => 7308
        ],
        [
            "name" => "Posta de Salud Rural Pilén",
            "code" => "116402",
            "comuna_id" => 7201
        ],
        [
            "name" => "Posta de Salud Rural El Manzano ( Teno)",
            "code" => "116403",
            "comuna_id" => 7308
        ],
        [
            "name" => "Posta de Salud Rural Santa Blanca",
            "code" => "116404",
            "comuna_id" => 7308
        ],
        [
            "name" => "Posta de Salud Rural Palquibudi",
            "code" => "116405",
            "comuna_id" => 7305
        ],
        [
            "name" => "Posta de Salud Rural El Parrón",
            "code" => "116406",
            "comuna_id" => 7305
        ],
        [
            "name" => "Posta de Salud Rural Pellines (Empedrado)",
            "code" => "116407",
            "comuna_id" => 7104
        ],
        [
            "name" => "Posta de Salud Rural El Peumal",
            "code" => "116408",
            "comuna_id" => 7306
        ],
        [
            "name" => "Posta de Salud Rural El Calabozo",
            "code" => "116409",
            "comuna_id" => 7306
        ],
        [
            "name" => "Posta de Salud Rural Los Queñes",
            "code" => "116410",
            "comuna_id" => 7306
        ],
        [
            "name" => "Posta de Salud Rural Huaquén (Curepto)",
            "code" => "116411",
            "comuna_id" => 7103
        ],
        [
            "name" => "Posta de Salud Rural Pejerrey",
            "code" => "116412",
            "comuna_id" => 7401
        ],
        [
            "name" => "Posta de Salud Rural Tutuquén",
            "code" => "116413",
            "comuna_id" => 7301
        ],
        [
            "name" => "Posta de Salud Rural Chequenlemu",
            "code" => "116415",
            "comuna_id" => 7301
        ],
        [
            "name" => "Posta de Salud Rural Upeo",
            "code" => "116416",
            "comuna_id" => 7301
        ],
        [
            "name" => "Posta de Salud Rural Potrero Grande",
            "code" => "116417",
            "comuna_id" => 7301
        ],
        [
            "name" => "Posta de Salud Rural Cordillerilla",
            "code" => "116418",
            "comuna_id" => 7301
        ],
        [
            "name" => "Posta de Salud Rural Pichingal",
            "code" => "116419",
            "comuna_id" => 7304
        ],
        [
            "name" => "Posta de Salud Rural Itahue",
            "code" => "116420",
            "comuna_id" => 7304
        ],
        [
            "name" => "Posta de Salud Rural El Radal",
            "code" => "116421",
            "comuna_id" => 7304
        ],
        [
            "name" => "Posta de Salud Rural El Yacal",
            "code" => "116422",
            "comuna_id" => 7304
        ],
        [
            "name" => "Posta de Salud Rural La Huerta",
            "code" => "116424",
            "comuna_id" => 7302
        ],
        [
            "name" => "Posta de Salud Rural Lora",
            "code" => "116425",
            "comuna_id" => 7303
        ],
        [
            "name" => "Posta de Salud Rural Duao de Licantén",
            "code" => "116426",
            "comuna_id" => 7303
        ],
        [
            "name" => "Posta de Salud Rural Iloca",
            "code" => "116427",
            "comuna_id" => 7303
        ],
        [
            "name" => "Posta de Salud Rural Llico (Vichuquén)",
            "code" => "116428",
            "comuna_id" => 7309
        ],
        [
            "name" => "Posta de Salud Rural Lipimávida",
            "code" => "116429",
            "comuna_id" => 7309
        ],
        [
            "name" => "Posta de Salud Rural El Colo",
            "code" => "116430",
            "comuna_id" => 7202
        ],
        [
            "name" => "Posta de Salud Rural Rarín",
            "code" => "116431",
            "comuna_id" => 7309
        ],
        [
            "name" => "Posta de Salud Rural Camarico (Río Claro)",
            "code" => "116432",
            "comuna_id" => 7108
        ],
        [
            "name" => "Posta de Salud Rural Porvenir",
            "code" => "116433",
            "comuna_id" => 7108
        ],
        [
            "name" => "Posta de Salud Rural Peñaflor",
            "code" => "116434",
            "comuna_id" => 7108
        ],
        [
            "name" => "Posta de Salud Rural Coipué (Curepto)",
            "code" => "116435",
            "comuna_id" => 7103
        ],
        [
            "name" => "Posta de Salud Rural Carrizalillo (Constitución )",
            "code" => "116436",
            "comuna_id" => 7102
        ],
        [
            "name" => "Posta de Salud Rural Botalcura",
            "code" => "116437",
            "comuna_id" => 7107
        ],
        [
            "name" => "Posta de Salud Rural Corinto",
            "code" => "116438",
            "comuna_id" => 7107
        ],
        [
            "name" => "Posta de Salud Rural Tanhuao",
            "code" => "116439",
            "comuna_id" => 7107
        ],
        [
            "name" => "Posta de Salud Rural Colín",
            "code" => "116440",
            "comuna_id" => 7105
        ],
        [
            "name" => "Posta de Salud Rural Duao de Maule",
            "code" => "116441",
            "comuna_id" => 7105
        ],
        [
            "name" => "Posta de Salud Rural Quiñipeumo",
            "code" => "116442",
            "comuna_id" => 7105
        ],
        [
            "name" => "Posta de Salud Rural Peumo Negro",
            "code" => "116443",
            "comuna_id" => 7109
        ],
        [
            "name" => "Posta de Salud Rural La Placeta",
            "code" => "116444",
            "comuna_id" => 7109
        ],
        [
            "name" => "Posta de Salud Rural Punta de Diamante",
            "code" => "116445",
            "comuna_id" => 7109
        ],
        [
            "name" => "Posta de Salud Rural Las Lomas (San Clemente )",
            "code" => "116446",
            "comuna_id" => 7109
        ],
        [
            "name" => "Posta de Salud Rural Mariposas",
            "code" => "116447",
            "comuna_id" => 7109
        ],
        [
            "name" => "Posta de Salud Rural Vilches",
            "code" => "116448",
            "comuna_id" => 7109
        ],
        [
            "name" => "Posta de Salud Rural Corralones",
            "code" => "116449",
            "comuna_id" => 7109
        ],
        [
            "name" => "Posta de Salud Rural Los Montes",
            "code" => "116450",
            "comuna_id" => 7109
        ],
        [
            "name" => "Posta de Salud Rural El Colorado",
            "code" => "116451",
            "comuna_id" => 7109
        ],
        [
            "name" => "Posta de Salud Rural La Suiza",
            "code" => "116452",
            "comuna_id" => 7109
        ],
        [
            "name" => "Posta de Salud Rural Maitenes",
            "code" => "116453",
            "comuna_id" => 7109
        ],
        [
            "name" => "Posta de Salud Rural Rapilermo",
            "code" => "116454",
            "comuna_id" => 7103
        ],
        [
            "name" => "Posta de Salud Rural Gualleco",
            "code" => "116455",
            "comuna_id" => 7103
        ],
        [
            "name" => "Posta de Salud Rural Calpún",
            "code" => "116456",
            "comuna_id" => 7103
        ],
        [
            "name" => "Posta de Salud Rural Putú",
            "code" => "116457",
            "comuna_id" => 7102
        ],
        [
            "name" => "Posta de Salud Rural Buenos Aires",
            "code" => "116458",
            "comuna_id" => 7109
        ],
        [
            "name" => "Posta de Salud Rural Nirivilo",
            "code" => "116459",
            "comuna_id" => 7406
        ],
        [
            "name" => "Posta de Salud Rural Rastrojos",
            "code" => "116460",
            "comuna_id" => 7406
        ],
        [
            "name" => "Posta de Salud Rural Villavicencio",
            "code" => "116461",
            "comuna_id" => 7406
        ],
        [
            "name" => "Posta de Salud Rural Huerta",
            "code" => "116462",
            "comuna_id" => 7406
        ],
        [
            "name" => "Posta de Salud Rural Melozal",
            "code" => "116463",
            "comuna_id" => 7406
        ],
        [
            "name" => "Posta de Salud Rural Caliboro",
            "code" => "116464",
            "comuna_id" => 7406
        ],
        [
            "name" => "Posta de Salud Rural El Sauce de San Javier",
            "code" => "116465",
            "comuna_id" => 7406
        ],
        [
            "name" => "Posta de Salud Rural Estación",
            "code" => "116466",
            "comuna_id" => 7407
        ],
        [
            "name" => "Posta de Salud Rural Putagán",
            "code" => "116467",
            "comuna_id" => 7407
        ],
        [
            "name" => "Posta de Salud Rural Lagunillas ( Villa Alegre )",
            "code" => "116468",
            "comuna_id" => 7407
        ],
        [
            "name" => "Posta de Salud Rural Peñuelas",
            "code" => "116469",
            "comuna_id" => 7407
        ],
        [
            "name" => "Posta de Salud Rural Orilla de Maule",
            "code" => "116470",
            "comuna_id" => 7408
        ],
        [
            "name" => "Posta de Salud Rural Maitencillo (Yerbas Buenas)",
            "code" => "116471",
            "comuna_id" => 7408
        ],
        [
            "name" => "Posta de Salud Rural Maule Sur",
            "code" => "116472",
            "comuna_id" => 7402
        ],
        [
            "name" => "Posta de Salud Rural Palmilla (Linares)",
            "code" => "116473",
            "comuna_id" => 7401
        ],
        [
            "name" => "Posta de Salud Rural Embalse Ancoa",
            "code" => "116474",
            "comuna_id" => 7401
        ],
        [
            "name" => "Posta de Salud Rural Peumal",
            "code" => "116475",
            "comuna_id" => 7406
        ],
        [
            "name" => "Posta de Salud Rural Vega de Salas",
            "code" => "116476",
            "comuna_id" => 7401
        ],
        [
            "name" => "Posta de Salud Rural Chupallar",
            "code" => "116477",
            "comuna_id" => 7401
        ],
        [
            "name" => "Posta de Salud Rural Los Hualles",
            "code" => "116478",
            "comuna_id" => 7401
        ],
        [
            "name" => "Posta de Salud Rural Las Cañas",
            "code" => "116479",
            "comuna_id" => 7102
        ],
        [
            "name" => "Posta de Salud Rural Miraflores",
            "code" => "116480",
            "comuna_id" => 7403
        ],
        [
            "name" => "Posta de Salud Rural Huimeo",
            "code" => "116481",
            "comuna_id" => 7403
        ],
        [
            "name" => "Posta de Salud Rural Mesamávida (Los Ángeles)",
            "code" => "116482",
            "comuna_id" => 7403
        ],
        [
            "name" => "Posta de Salud Rural La Quinta",
            "code" => "116483",
            "comuna_id" => 7403
        ],
        [
            "name" => "Posta de Salud Rural San José (Longaví)",
            "code" => "116484",
            "comuna_id" => 7403
        ],
        [
            "name" => "Posta de Salud Rural Loma de Vásquez",
            "code" => "116486",
            "comuna_id" => 7403
        ],
        [
            "name" => "Posta de Salud Rural Piguchén (Retiro)",
            "code" => "116487",
            "comuna_id" => 7405
        ],
        [
            "name" => "Posta de Salud Rural Villaseca",
            "code" => "116488",
            "comuna_id" => 7405
        ],
        [
            "name" => "Posta de Salud Rural Talhuenes",
            "code" => "116489",
            "comuna_id" => 7405
        ],
        [
            "name" => "Posta de Salud Rural Camelias",
            "code" => "116490",
            "comuna_id" => 7405
        ],
        [
            "name" => "Posta de Salud Rural San Marcos (Retiro)",
            "code" => "116491",
            "comuna_id" => 7405
        ],
        [
            "name" => "Posta de Salud Rural Copihue",
            "code" => "116492",
            "comuna_id" => 7405
        ],
        [
            "name" => "Posta de Salud Rural Los Canelos (Parral)",
            "code" => "116493",
            "comuna_id" => 7404
        ],
        [
            "name" => "Posta de Salud Rural Bullileo",
            "code" => "116494",
            "comuna_id" => 7404
        ],
        [
            "name" => "Posta de Salud Rural Digua",
            "code" => "116495",
            "comuna_id" => 7404
        ],
        [
            "name" => "Posta de Salud Rural Catillo",
            "code" => "116496",
            "comuna_id" => 7404
        ],
        [
            "name" => "Posta de Salud Rural Perquilauquén",
            "code" => "116497",
            "comuna_id" => 7404
        ],
        [
            "name" => "Posta de Salud Rural Tapihue",
            "code" => "116498",
            "comuna_id" => 7201
        ],
        [
            "name" => "Posta de Salud Rural Cayurranquil",
            "code" => "116499",
            "comuna_id" => 7201
        ],
        [
            "name" => "Posta de Salud Rural Santo Toribio",
            "code" => "116500",
            "comuna_id" => 7201
        ],
        [
            "name" => "Posta de Salud Rural Quella",
            "code" => "116501",
            "comuna_id" => 7201
        ],
        [
            "name" => "Posta de Salud Rural Tres Esquinas (Cauquenes)",
            "code" => "116502",
            "comuna_id" => 7201
        ],
        [
            "name" => "Posta de Salud Rural Cancha de Los Huevos",
            "code" => "116503",
            "comuna_id" => 7201
        ],
        [
            "name" => "Posta de Salud Rural Coronel",
            "code" => "116504",
            "comuna_id" => 7201
        ],
        [
            "name" => "Posta de Salud Rural Lomas de Putagán",
            "code" => "116505",
            "comuna_id" => 7402
        ],
        [
            "name" => "Posta de Salud Rural Pelluhue",
            "code" => "116506",
            "comuna_id" => 7203
        ],
        [
            "name" => "Posta de Salud Rural Chovellén",
            "code" => "116508",
            "comuna_id" => 7203
        ],
        [
            "name" => "Posta de Salud Rural Pahuil",
            "code" => "116509",
            "comuna_id" => 7202
        ],
        [
            "name" => "Posta de Salud Rural Loanco",
            "code" => "116510",
            "comuna_id" => 7202
        ],
        [
            "name" => "Posta de Salud Rural Santa Olga",
            "code" => "116512",
            "comuna_id" => 7102
        ],
        [
            "name" => "Posta de Salud Rural Los Quillayes (Sagrada Familia)",
            "code" => "116514",
            "comuna_id" => 7307
        ],
        [
            "name" => "Posta de Salud Rural Vara Gruesa",
            "code" => "116515",
            "comuna_id" => 7401
        ],
        [
            "name" => "Posta de Salud Rural El Carmen( Longaví)",
            "code" => "116516",
            "comuna_id" => 7403
        ],
        [
            "name" => "Posta de Salud Rural El Bolsico",
            "code" => "116517",
            "comuna_id" => 7108
        ],
        [
            "name" => "Posta de Salud Rural El Aromo",
            "code" => "116518",
            "comuna_id" => 7406
        ],
        [
            "name" => "Posta de Salud Rural Esperanza",
            "code" => "116519",
            "comuna_id" => 7407
        ],
        [
            "name" => "Posta de Salud Rural Santa Elena (San Clemente)",
            "code" => "116520",
            "comuna_id" => 7109
        ],
        [
            "name" => "Posta de Salud Rural Las Lomas (Curepto)",
            "code" => "116521",
            "comuna_id" => 7103
        ],
        [
            "name" => "Posta de Salud Rural Los Carros",
            "code" => "116522",
            "comuna_id" => 7404
        ],
        [
            "name" => "Posta de Salud Rural Monte Flor",
            "code" => "116523",
            "comuna_id" => 7404
        ],
        [
            "name" => "Posta de Salud Rural Fuerte Viejo",
            "code" => "116524",
            "comuna_id" => 7404
        ],
        [
            "name" => "Posta de Salud Rural Tres Esquinas (Molina)",
            "code" => "116525",
            "comuna_id" => 7304
        ],
        [
            "name" => "Posta de Salud Rural Santa Delfina",
            "code" => "116526",
            "comuna_id" => 7405
        ],
        [
            "name" => "Posta de Salud Rural San Ramón (Retiro)",
            "code" => "116527",
            "comuna_id" => 7405
        ],
        [
            "name" => "Posta de Salud Rural La Pesca",
            "code" => "116528",
            "comuna_id" => 7303
        ],
        [
            "name" => "Posta de Salud Rural Barba Rubia",
            "code" => "116529",
            "comuna_id" => 7302
        ],
        [
            "name" => "Posta de Salud Rural Espinalillo",
            "code" => "116530",
            "comuna_id" => 7302
        ],
        [
            "name" => "Posta de Salud Rural San Víctor Álamos",
            "code" => "116531",
            "comuna_id" => 7401
        ],
        [
            "name" => "Posta de Salud Rural Lomas de la Tercera",
            "code" => "116532",
            "comuna_id" => 7403
        ],
        [
            "name" => "Posta de Salud Rural Santa Rosa (Sagrada Familia)",
            "code" => "116533",
            "comuna_id" => 7307
        ],
        [
            "name" => "Posta de Salud Rural Huencuecho",
            "code" => "116534",
            "comuna_id" => 7106
        ],
        [
            "name" => "Posta de Salud Rural Llancanao",
            "code" => "116537",
            "comuna_id" => 7401
        ],
        [
            "name" => "Posta de Salud Rural Estancilla",
            "code" => "116538",
            "comuna_id" => 7103
        ],
        [
            "name" => "Posta de Salud Rural El Cardonal",
            "code" => "116539",
            "comuna_id" => 7202
        ],
        [
            "name" => "Posta de Salud Rural Los Robles (Río Claro)",
            "code" => "116540",
            "comuna_id" => 7108
        ],
        [
            "name" => "Posta de Salud Rural El Manzano (Pelarco )",
            "code" => "116541",
            "comuna_id" => 7106
        ],
        [
            "name" => "Posta de Salud Rural Linares de Perales",
            "code" => "116542",
            "comuna_id" => 7105
        ],
        [
            "name" => "Posta de Salud Rural Batuco",
            "code" => "116543",
            "comuna_id" => 7107
        ],
        [
            "name" => "Posta de Salud Rural El Porvenir",
            "code" => "116544",
            "comuna_id" => 7301
        ],
        [
            "name" => "Posta de Salud Rural Chequén",
            "code" => "116546",
            "comuna_id" => 7109
        ],
        [
            "name" => "Posta de Salud Rural Puipuyén",
            "code" => "116547",
            "comuna_id" => 7408
        ],
        [
            "name" => "Posta de Salud Rural La Vega (Chanco)",
            "code" => "116548",
            "comuna_id" => 7202
        ],
        [
            "name" => "Posta de Salud Rural Boyeruca",
            "code" => "116549",
            "comuna_id" => 7309
        ],
        [
            "name" => "Posta de Salud Rural Bajos de Huenutil",
            "code" => "116550",
            "comuna_id" => 7404
        ],
        [
            "name" => "Posta de Salud Rural Talquita",
            "code" => "116551",
            "comuna_id" => 7404
        ],
        [
            "name" => "Posta de Salud Rural Las Palmas de Toconey",
            "code" => "116552",
            "comuna_id" => 7107
        ],
        [
            "name" => "Posta de Salud Rural Quilhuine",
            "code" => "116553",
            "comuna_id" => 7202
        ],
        [
            "name" => "Posta de Salud Rural Raúl Folleraux",
            "code" => "116554",
            "comuna_id" => 7308
        ],
        [
            "name" => "Posta de Salud Rural Santa Sofía",
            "code" => "116555",
            "comuna_id" => 7201
        ],
        [
            "name" => "Posta de Salud Rural Pocillas",
            "code" => "116556",
            "comuna_id" => 7201
        ],
        [
            "name" => "Posta de Salud Rural La Obra (Curicó)",
            "code" => "116557",
            "comuna_id" => 7301
        ],
        [
            "name" => "Posta de Salud Rural Lagunillas (Chanco)",
            "code" => "116558",
            "comuna_id" => 7202
        ],
        [
            "name" => "Posta de Salud Rural Floresta",
            "code" => "116559",
            "comuna_id" => 7402
        ],
        [
            "name" => "Posta de Salud Rural La Orilla (Parral)",
            "code" => "116560",
            "comuna_id" => 7404
        ],
        [
            "name" => "Posta de Salud Rural Mercedes",
            "code" => "116561",
            "comuna_id" => 7101
        ],
        [
            "name" => "Posta de Salud Rural Las Toscas",
            "code" => "116562",
            "comuna_id" => 7401
        ],
        [
            "name" => "Posta de Salud Rural Sauzal",
            "code" => "116563",
            "comuna_id" => 7201
        ],
        [
            "name" => "Posta de Salud Rural Villa Baviera",
            "code" => "116564",
            "comuna_id" => 7404
        ],
        [
            "name" => "Posta de Salud Rural El Plumero",
            "code" => "116569",
            "comuna_id" => 7305
        ],
        [
            "name" => "Posta de Salud Rural La Mina",
            "code" => "116570",
            "comuna_id" => 7109
        ],
        [
            "name" => "Posta de Salud Rural Santa Rita",
            "code" => "116571",
            "comuna_id" => 7106
        ],
        [
            "name" => "Posta de Salud Rural Pangue Arriba",
            "code" => "116572",
            "comuna_id" => 7110
        ],
        [
            "name" => "COSAM de Linares",
            "code" => "116601",
            "comuna_id" => 7401
        ],
        [
            "name" => "COSAM Del Maule",
            "code" => "116602",
            "comuna_id" => 7101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Prosperidad",
            "code" => "116703",
            "comuna_id" => 7301
        ],
        [
            "name" => "Centro Comunitario de Salud Familia Brilla el Sol",
            "code" => "116705",
            "comuna_id" => 7101
        ],
        [
            "name" => "Centro de Salud Familiar Luis Navarrete Carvacho",
            "code" => "116709",
            "comuna_id" => 7401
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Los Olivos",
            "code" => "116711",
            "comuna_id" => 7404
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Chile Nuevo",
            "code" => "116713",
            "comuna_id" => 7109
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Población Fernández",
            "code" => "116729",
            "comuna_id" => 7201
        ],
        [
            "name" => "Centro comunitario de Salud Familiar Lo Figueroa",
            "code" => "116731",
            "comuna_id" => 7107
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Rosita O'Higgins",
            "code" => "116741",
            "comuna_id" => 7201
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Faustino González",
            "code" => "116760",
            "comuna_id" => 7101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Doña Carmen de Sarmiento",
            "code" => "116761",
            "comuna_id" => 7301
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Los Cristales",
            "code" => "116762",
            "comuna_id" => 7403
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar San Pablo",
            "code" => "116763",
            "comuna_id" => 7406
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Loma de Las Tortillas",
            "code" => "116764",
            "comuna_id" => 7407
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Los Robles",
            "code" => "116765",
            "comuna_id" => 7405
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Nuevo Horizonte",
            "code" => "116766",
            "comuna_id" => 7101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Aurora",
            "code" => "116780",
            "comuna_id" => 7109
        ],
        [
            "name" => "SAPU-Los Aromos",
            "code" => "116801",
            "comuna_id" => 7301
        ],
        [
            "name" => "SAR Bombero Garrido",
            "code" => "116802",
            "comuna_id" => 7301
        ],
        [
            "name" => "SAPU-Curicó Centro",
            "code" => "116803",
            "comuna_id" => 7301
        ],
        [
            "name" => "SAPU-José Dionisio Astaburuaga",
            "code" => "116805",
            "comuna_id" => 7101
        ],
        [
            "name" => "SAPU-La Florida",
            "code" => "116806",
            "comuna_id" => 7101
        ],
        [
            "name" => "SAPU-Julio Contardo Urzúa",
            "code" => "116807",
            "comuna_id" => 7101
        ],
        [
            "name" => "SAPU-San Juan de Dios de Linares",
            "code" => "116809",
            "comuna_id" => 7401
        ],
        [
            "name" => "SAPU-Arrau Méndez",
            "code" => "116811",
            "comuna_id" => 7404
        ],
        [
            "name" => "SAR San Clemente",
            "code" => "116813",
            "comuna_id" => 7109
        ],
        [
            "name" => "SAPU-Amanda Benavente",
            "code" => "116820",
            "comuna_id" => 7403
        ],
        [
            "name" => "SAPU-Oscar Bonilla",
            "code" => "116823",
            "comuna_id" => 7401
        ],
        [
            "name" => "SAPU-Armando Williams",
            "code" => "116829",
            "comuna_id" => 7201
        ],
        [
            "name" => "SAPU-Carlos Trupp",
            "code" => "116831",
            "comuna_id" => 7101
        ],
        [
            "name" => "SAPU-Cerro Alto",
            "code" => "116832",
            "comuna_id" => 7102
        ],
        [
            "name" => "SAPU-Las Américas",
            "code" => "116840",
            "comuna_id" => 7101
        ],
        [
            "name" => "Actividades gestionadas por la Dirección del Servicio para apoyo de la Red (S.S de Ñuble)",
            "code" => "117010",
            "comuna_id" => 8401
        ],
        [
            "name" => "PRAIS (S.S Ñuble)",
            "code" => "117011",
            "comuna_id" => 8401
        ],
        [
            "name" => "Clínica Dental Móvil Triple. Pat. PW4105 (Chillán)",
            "code" => "117012",
            "comuna_id" => 8401
        ],
        [
            "name" => "Hospital Clínico Herminda Martín (Chillán)",
            "code" => "117101",
            "comuna_id" => 8401
        ],
        [
            "name" => "Hospital de San Carlos",
            "code" => "117102",
            "comuna_id" => 8416
        ],
        [
            "name" => "Hospital Comunitario de Salud Familiar de Bulnes",
            "code" => "117103",
            "comuna_id" => 8402
        ],
        [
            "name" => "Hospital Comunitario de Salud Familiar Pedro Morales Campos (Yungay)",
            "code" => "117104",
            "comuna_id" => 8421
        ],
        [
            "name" => "Hospital Comunitario de Salud Familiar de Quirihue",
            "code" => "117106",
            "comuna_id" => 8414
        ],
        [
            "name" => "Hospital Comunitario de Salud Familiar de El Carmen",
            "code" => "117107",
            "comuna_id" => 8407
        ],
        [
            "name" => "Hospital Comunitario de Salud Familiar Dr. Eduardo Contreras Trabucco de Coelemu",
            "code" => "117108",
            "comuna_id" => 8404
        ],
        [
            "name" => "Consultorio de Salud AChS (Chillán)",
            "code" => "117202",
            "comuna_id" => 8401
        ],
        [
            "name" => "Centro CONIN Chillán",
            "code" => "117204",
            "comuna_id" => 8401
        ],
        [
            "name" => "Clínica Las Amapolas",
            "code" => "117205",
            "comuna_id" => 8401
        ],
        [
            "name" => "Centro de Salud Mutual CChC Chillán",
            "code" => "117207",
            "comuna_id" => 8401
        ],
        [
            "name" => "Policlínico San Martín de Porres",
            "code" => "117224",
            "comuna_id" => 8401
        ],
        [
            "name" => "Clínica Chillán",
            "code" => "117225",
            "comuna_id" => 8401
        ],
        [
            "name" => "Departamento de Salud Estudiantil Universidad del Biobío Sede Chillán",
            "code" => "117226",
            "comuna_id" => 8401
        ],
        [
            "name" => "Consultorio de Salud Universidad de Concepción",
            "code" => "117227",
            "comuna_id" => 8401
        ],
        [
            "name" => "Soc.Lab.cl. Arauco Ltda.",
            "code" => "117228",
            "comuna_id" => 8401
        ],
        [
            "name" => "Soc.Lab Clínico Biolab Ltda.",
            "code" => "117229",
            "comuna_id" => 8401
        ],
        [
            "name" => "Laboratorio Clínico Cinco de Abril",
            "code" => "117230",
            "comuna_id" => 8401
        ],
        [
            "name" => "Laboratorio Clínico Christian Gross Ltda.",
            "code" => "117231",
            "comuna_id" => 8401
        ],
        [
            "name" => "Sociedad Laboratorio Folch Ltda",
            "code" => "117232",
            "comuna_id" => 8401
        ],
        [
            "name" => "Laboratorio Clínico Someruno",
            "code" => "117233",
            "comuna_id" => 8401
        ],
        [
            "name" => "Sociedad Laboratorio Clínico  Bioclín Ltda.",
            "code" => "117234",
            "comuna_id" => 8401
        ],
        [
            "name" => "Laboratorio  Inmunomedica  Ltda.",
            "code" => "117235",
            "comuna_id" => 8401
        ],
        [
            "name" => "Laboratorio  Clínico Chillan  Ltda.",
            "code" => "117236",
            "comuna_id" => 8401
        ],
        [
            "name" => "Laboratorio  Clínico San Carlos Ltda.",
            "code" => "117237",
            "comuna_id" => 8401
        ],
        [
            "name" => "Megasalud Chillán",
            "code" => "117238",
            "comuna_id" => 8401
        ],
        [
            "name" => "Laboratorio Clínico Inmunomedica",
            "code" => "117239",
            "comuna_id" => 8401
        ],
        [
            "name" => "Laboratorio Clínico Someruno",
            "code" => "117240",
            "comuna_id" => 8401
        ],
        [
            "name" => "Laboratorio Clínico Cinco de Abril",
            "code" => "117241",
            "comuna_id" => 8401
        ],
        [
            "name" => "Centro de Salud Familiar Violeta Parra",
            "code" => "117301",
            "comuna_id" => 8401
        ],
        [
            "name" => "Centro de Salud Familiar San Ramón Nonato",
            "code" => "117302",
            "comuna_id" => 8401
        ],
        [
            "name" => "Centro de Salud Familiar Ultraestación",
            "code" => "117303",
            "comuna_id" => 8401
        ],
        [
            "name" => "Centro de Salud Familiar Isabel Riquelme",
            "code" => "117304",
            "comuna_id" => 8401
        ],
        [
            "name" => "Centro de Salud Familiar Portezuelo",
            "code" => "117305",
            "comuna_id" => 8412
        ],
        [
            "name" => "Centro de Salud Familiar Quillón",
            "code" => "117306",
            "comuna_id" => 8413
        ],
        [
            "name" => "Centro de Salud Familiar Cobquecura",
            "code" => "117307",
            "comuna_id" => 8403
        ],
        [
            "name" => "Centro de Salud Familiar San Ignacio",
            "code" => "117308",
            "comuna_id" => 8418
        ],
        [
            "name" => "Centro de Salud Familiar San Fabián",
            "code" => "117309",
            "comuna_id" => 8417
        ],
        [
            "name" => "Centro de Salud Familiar Pemuco",
            "code" => "117310",
            "comuna_id" => 8410
        ],
        [
            "name" => "Centro de Salud Familiar Dr. José Duran Trujillo",
            "code" => "117311",
            "comuna_id" => 8416
        ],
        [
            "name" => "Centro de Salud Familiar San Nicolás",
            "code" => "117312",
            "comuna_id" => 8419
        ],
        [
            "name" => "Centro de Salud Familiar San Gregorio",
            "code" => "117313",
            "comuna_id" => 8409
        ],
        [
            "name" => "Centro de Salud Familiar Dr. David Benavente de Ninhue",
            "code" => "117314",
            "comuna_id" => 8408
        ],
        [
            "name" => "Centro de Salud Familiar Campanario",
            "code" => "117315",
            "comuna_id" => 8421
        ],
        [
            "name" => "Centro de Salud Familiar Ñipas",
            "code" => "117316",
            "comuna_id" => 8415
        ],
        [
            "name" => "Centro de Salud Familiar Pinto",
            "code" => "117317",
            "comuna_id" => 8411
        ],
        [
            "name" => "Centro de Salud Familiar Coihueco",
            "code" => "117318",
            "comuna_id" => 8405
        ],
        [
            "name" => "Centro de Salud Familiar Quiriquina",
            "code" => "117319",
            "comuna_id" => 8418
        ],
        [
            "name" => "Centro de Salud Familiar Quinchamalí",
            "code" => "117322",
            "comuna_id" => 8401
        ],
        [
            "name" => "Centro de Salud Familiar Los Volcanes",
            "code" => "117324",
            "comuna_id" => 8401
        ],
        [
            "name" => "Centro de Salud Familiar Luis Montecinos",
            "code" => "117325",
            "comuna_id" => 8405
        ],
        [
            "name" => "Centro de Salud Familiar Santa Clara",
            "code" => "117326",
            "comuna_id" => 8402
        ],
        [
            "name" => "Centro de Salud Familiar Treguaco",
            "code" => "117327",
            "comuna_id" => 8420
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Federico Puga",
            "code" => "117328",
            "comuna_id" => 8406
        ],
        [
            "name" => "Centro de Salud Familiar Teresa Baldechi",
            "code" => "117329",
            "comuna_id" => 8416
        ],
        [
            "name" => "Centro de Salud Familiar Sol de Oriente",
            "code" => "117330",
            "comuna_id" => 8401
        ],
        [
            "name" => "Centro de Salud Familiar Dra. Michelle Bachelet",
            "code" => "117331",
            "comuna_id" => 8406
        ],
        [
            "name" => "Posta de Salud Rural Talquipén",
            "code" => "117401",
            "comuna_id" => 8405
        ],
        [
            "name" => "Posta de Salud Rural Bustamante",
            "code" => "117403",
            "comuna_id" => 8405
        ],
        [
            "name" => "Posta de Salud Rural Capilla Cato",
            "code" => "117405",
            "comuna_id" => 8401
        ],
        [
            "name" => "Posta de Salud Rural Minas del Prado",
            "code" => "117406",
            "comuna_id" => 8405
        ],
        [
            "name" => "Posta de Salud Rural Tanilvoro",
            "code" => "117407",
            "comuna_id" => 8405
        ],
        [
            "name" => "Posta de Salud Rural Recinto",
            "code" => "117409",
            "comuna_id" => 8411
        ],
        [
            "name" => "Posta de Salud Rural Huape",
            "code" => "117410",
            "comuna_id" => 8401
        ],
        [
            "name" => "Posta de Salud Rural Rucapequén",
            "code" => "117413",
            "comuna_id" => 8406
        ],
        [
            "name" => "Posta de Salud Rural Nebuco",
            "code" => "117414",
            "comuna_id" => 8406
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Cachapoal",
            "code" => "117415",
            "comuna_id" => 8416
        ],
        [
            "name" => "Posta de Salud Rural Rivera de Ñuble",
            "code" => "117416",
            "comuna_id" => 8416
        ],
        [
            "name" => "Posta de Salud Rural Chacay (Ñiquén)",
            "code" => "117418",
            "comuna_id" => 8409
        ],
        [
            "name" => "Posta de Salud Rural Ñiquén",
            "code" => "117419",
            "comuna_id" => 8409
        ],
        [
            "name" => "Posta de Salud Rural Torrecillas",
            "code" => "117421",
            "comuna_id" => 8416
        ],
        [
            "name" => "Posta de Salud Rural La Gloria",
            "code" => "117422",
            "comuna_id" => 8409
        ],
        [
            "name" => "Posta de Salud Rural Monte Blanco",
            "code" => "117423",
            "comuna_id" => 8416
        ],
        [
            "name" => "Posta de Salud Rural Las Raíces",
            "code" => "117425",
            "comuna_id" => 8402
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Tres Esquinas",
            "code" => "117426",
            "comuna_id" => 8402
        ],
        [
            "name" => "Posta de Salud Rural Nueva Aldea",
            "code" => "117427",
            "comuna_id" => 8415
        ],
        [
            "name" => "Posta de Salud Rural Cartago",
            "code" => "117430",
            "comuna_id" => 8410
        ],
        [
            "name" => "Posta de Salud Rural Gral. Cruz",
            "code" => "117431",
            "comuna_id" => 8410
        ],
        [
            "name" => "Posta de Salud Rural El Sauce (Ninhue)",
            "code" => "117433",
            "comuna_id" => 8408
        ],
        [
            "name" => "Posta de Salud Rural Los Remates",
            "code" => "117434",
            "comuna_id" => 8414
        ],
        [
            "name" => "Posta de Salud Rural Trehualemu",
            "code" => "117435",
            "comuna_id" => 8407
        ],
        [
            "name" => "Posta de Salud Rural Pedregal de Zapallar",
            "code" => "117436",
            "comuna_id" => 8407
        ],
        [
            "name" => "Posta de Salud Rural San Vicente (El Carmen)",
            "code" => "117437",
            "comuna_id" => 8407
        ],
        [
            "name" => "Posta de Salud Rural Huemul",
            "code" => "117438",
            "comuna_id" => 8407
        ],
        [
            "name" => "Posta de Salud Rural Ranguelmo",
            "code" => "117439",
            "comuna_id" => 8404
        ],
        [
            "name" => "Posta de Salud Rural Guarilihue",
            "code" => "117442",
            "comuna_id" => 8404
        ],
        [
            "name" => "Posta de Salud Rural Boca Itata",
            "code" => "117443",
            "comuna_id" => 8420
        ],
        [
            "name" => "Posta de Salud Rural Denecan",
            "code" => "117444",
            "comuna_id" => 8420
        ],
        [
            "name" => "Posta de Salud Rural Vegas de Itata",
            "code" => "117445",
            "comuna_id" => 8404
        ],
        [
            "name" => "Posta de Salud Rural Minas de Leuque",
            "code" => "117446",
            "comuna_id" => 8420
        ],
        [
            "name" => "Posta de Salud Rural Cucha Cox",
            "code" => "117447",
            "comuna_id" => 8412
        ],
        [
            "name" => "Posta de Salud Rural Liucura Alto",
            "code" => "117448",
            "comuna_id" => 8413
        ],
        [
            "name" => "Posta de Salud Rural Juan Enrique Mora",
            "code" => "117449",
            "comuna_id" => 8413
        ],
        [
            "name" => "Posta de Salud Rural Casino",
            "code" => "117450",
            "comuna_id" => 8413
        ],
        [
            "name" => "Posta de Salud Rural Buchupureo",
            "code" => "117451",
            "comuna_id" => 8403
        ],
        [
            "name" => "Posta de Salud Rural Colmuyao",
            "code" => "117452",
            "comuna_id" => 8403
        ],
        [
            "name" => "Posta de Salud Rural El Calvario",
            "code" => "117454",
            "comuna_id" => 8418
        ],
        [
            "name" => "Consultorio General Rural de Pueblo Seco",
            "code" => "117455",
            "comuna_id" => 8418
        ],
        [
            "name" => "Posta de Salud Rural Capilla Norte",
            "code" => "117457",
            "comuna_id" => 8407
        ],
        [
            "name" => "Posta de Salud Rural San Antonio (Yungay)",
            "code" => "117458",
            "comuna_id" => 8421
        ],
        [
            "name" => "Posta de Salud Rural Capellanía",
            "code" => "117459",
            "comuna_id" => 8412
        ],
        [
            "name" => "Posta de Salud Rural Toquihua",
            "code" => "117461",
            "comuna_id" => 8416
        ],
        [
            "name" => "Posta de Salud Rural Arizona",
            "code" => "117462",
            "comuna_id" => 8416
        ],
        [
            "name" => "Posta de Salud Rural El Rincón",
            "code" => "117463",
            "comuna_id" => 8408
        ],
        [
            "name" => "Posta de Salud Rural Zemita",
            "code" => "117464",
            "comuna_id" => 8409
        ],
        [
            "name" => "Posta de Salud Rural San Ignacio Palomares",
            "code" => "117465",
            "comuna_id" => 8415
        ],
        [
            "name" => "Posta de Salud Rural El Caracol",
            "code" => "117467",
            "comuna_id" => 8417
        ],
        [
            "name" => "Posta de Salud Rural Belén (Ñiquen)",
            "code" => "117468",
            "comuna_id" => 8409
        ],
        [
            "name" => "Posta de Salud Rural Ciruelito",
            "code" => "117469",
            "comuna_id" => 8411
        ],
        [
            "name" => "Posta de Salud Rural Trabuncura",
            "code" => "117470",
            "comuna_id" => 8417
        ],
        [
            "name" => "Posta de Salud Rural Puente Ñuble",
            "code" => "117471",
            "comuna_id" => 8419
        ],
        [
            "name" => "Posta de Salud Rural Chancal",
            "code" => "117472",
            "comuna_id" => 8413
        ],
        [
            "name" => "Posta de Salud Rural Capilla Sur",
            "code" => "117473",
            "comuna_id" => 8407
        ],
        [
            "name" => "Posta de Salud Rural Agua Santa",
            "code" => "117474",
            "comuna_id" => 8407
        ],
        [
            "name" => "Posta de Salud Rural Castañal",
            "code" => "117475",
            "comuna_id" => 8407
        ],
        [
            "name" => "Posta de Salud Rural Las Hormigas",
            "code" => "117476",
            "comuna_id" => 8407
        ],
        [
            "name" => "Posta de Salud Rural Chamizal",
            "code" => "117477",
            "comuna_id" => 8407
        ],
        [
            "name" => "COSAM Chillán",
            "code" => "117601",
            "comuna_id" => 8401
        ],
        [
            "name" => "COSAM San Carlos",
            "code" => "117602",
            "comuna_id" => 8416
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Padre Hurtado",
            "code" => "117701",
            "comuna_id" => 8401
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar El Roble",
            "code" => "117702",
            "comuna_id" => 8401
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar El Casino",
            "code" => "117706",
            "comuna_id" => 8413
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Valle Hondo",
            "code" => "117729",
            "comuna_id" => 8416
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Los Alpes",
            "code" => "117799",
            "comuna_id" => 8401
        ],
        [
            "name" => "SAPU-Violeta Parra",
            "code" => "117801",
            "comuna_id" => 8401
        ],
        [
            "name" => "SAPU-San Ramón de Nonato",
            "code" => "117802",
            "comuna_id" => 8401
        ],
        [
            "name" => "SAPU-Ultraestación",
            "code" => "117803",
            "comuna_id" => 8401
        ],
        [
            "name" => "SAPU-José Durán Trujillo",
            "code" => "117811",
            "comuna_id" => 8416
        ],
        [
            "name" => "SAPU-Los Volcanes",
            "code" => "117824",
            "comuna_id" => 8401
        ],
        [
            "name" => "SAPU-Dr. Federico Puga",
            "code" => "117828",
            "comuna_id" => 8406
        ],
        [
            "name" => "Actividades gestionadas por la Dirección del Servicio para apoyo de la Red (S.S de Concepción)",
            "code" => "118010",
            "comuna_id" => 8101
        ],
        [
            "name" => "PRAIS (S.S Concepción)",
            "code" => "118011",
            "comuna_id" => 8101
        ],
        [
            "name" => "Hospital Clínico Regional Dr. Guillermo Grant Benavente (Concepción)",
            "code" => "118100",
            "comuna_id" => 8101
        ],
        [
            "name" => "Hospital Traumatológico (Concepción)",
            "code" => "118103",
            "comuna_id" => 8101
        ],
        [
            "name" => "Hospital San José (Coronel)",
            "code" => "118105",
            "comuna_id" => 8102
        ],
        [
            "name" => "Hospital de Lota",
            "code" => "118106",
            "comuna_id" => 8106
        ],
        [
            "name" => "Hospital Clorinda Avello (Santa Juana)",
            "code" => "118107",
            "comuna_id" => 8109
        ],
        [
            "name" => "Hospital San Agustín de Florida",
            "code" => "118108",
            "comuna_id" => 8104
        ],
        [
            "name" => "Centro de Especialidades de Medicina Transfusional",
            "code" => "118109",
            "comuna_id" => 8101
        ],
        [
            "name" => "Hospital Clínico del Sur S.A.",
            "code" => "118200",
            "comuna_id" => 8101
        ],
        [
            "name" => "Clínica de la Mujer Sanatorio Alemán",
            "code" => "118202",
            "comuna_id" => 8101
        ],
        [
            "name" => "Clínica de La Mujer (Concepción)",
            "code" => "118203",
            "comuna_id" => 8101
        ],
        [
            "name" => "Centro Clínico Militar de Concepción",
            "code" => "118206",
            "comuna_id" => 8101
        ],
        [
            "name" => "Centro CONIN Concepción",
            "code" => "118208",
            "comuna_id" => 8101
        ],
        [
            "name" => "Servicios Clínicos Neuropsiquiátricos y Geriátricos R y G Limitada",
            "code" => "118210",
            "comuna_id" => 8101
        ],
        [
            "name" => "Centro Penitenciario",
            "code" => "118214",
            "comuna_id" => 8101
        ],
        [
            "name" => "Laboratorio Bionet (Concepción)",
            "code" => "118250",
            "comuna_id" => 8101
        ],
        [
            "name" => "Laboratorio Tenmedica",
            "code" => "118251",
            "comuna_id" => 8101
        ],
        [
            "name" => "Policlínico Agencia Concepción de la Asociación Chilena de Seguridad",
            "code" => "118252",
            "comuna_id" => 8101
        ],
        [
            "name" => "Clínica Ambulatoria Sanatorio Alemán San Pedro",
            "code" => "118253",
            "comuna_id" => 8108
        ],
        [
            "name" => "Centro Integramédica del Trébol.",
            "code" => "118289",
            "comuna_id" => 8110
        ],
        [
            "name" => "Megasalud S.A. Centro Médico y Dental Concepción",
            "code" => "118290",
            "comuna_id" => 8101
        ],
        [
            "name" => "Vacunatorio Concepción",
            "code" => "118291",
            "comuna_id" => 8101
        ],
        [
            "name" => "Vacunatorio San Pedro de la Paz",
            "code" => "118292",
            "comuna_id" => 8108
        ],
        [
            "name" => "Centro Médico Inmunomédica",
            "code" => "118293",
            "comuna_id" => 8101
        ],
        [
            "name" => "Centro y Médico Dental VIII Zona de Carabineros (Del Bíobío)",
            "code" => "118294",
            "comuna_id" => 8101
        ],
        [
            "name" => "Vacunatorio El Salvador",
            "code" => "118295",
            "comuna_id" => 8101
        ],
        [
            "name" => "Kiñewen Ltda.",
            "code" => "118296",
            "comuna_id" => 8101
        ],
        [
            "name" => "Vacunatorio Endodent",
            "code" => "118297",
            "comuna_id" => 8108
        ],
        [
            "name" => "Departamento de Salud Estudiantil Universidad del Bíobío Campus Concepción",
            "code" => "118298",
            "comuna_id" => 8101
        ],
        [
            "name" => "Vacunatorio INSUVAL",
            "code" => "118299",
            "comuna_id" => 8101
        ],
        [
            "name" => "Centro de Salud Familiar Pinares",
            "code" => "118301",
            "comuna_id" => 8103
        ],
        [
            "name" => "Centro de Salud Familiar Boca Sur",
            "code" => "118302",
            "comuna_id" => 8108
        ],
        [
            "name" => "Centro de Salud Familiar Pedro de Valdivia (Concepción)",
            "code" => "118303",
            "comuna_id" => 8101
        ],
        [
            "name" => "Centro de Salud Familiar O'Higgins",
            "code" => "118304",
            "comuna_id" => 8101
        ],
        [
            "name" => "Centro de Salud Familiar Víctor Manuel Fernández",
            "code" => "118305",
            "comuna_id" => 8101
        ],
        [
            "name" => "Centro de Salud Familiar Tucapel",
            "code" => "118306",
            "comuna_id" => 8101
        ],
        [
            "name" => "Centro de Salud Familiar Chiguayante",
            "code" => "118307",
            "comuna_id" => 8103
        ],
        [
            "name" => "Centro de Salud Familiar San Pedro de La Paz",
            "code" => "118308",
            "comuna_id" => 8108
        ],
        [
            "name" => "Centro de Salud Familiar Lorenzo Arenas",
            "code" => "118309",
            "comuna_id" => 8101
        ],
        [
            "name" => "Centro de Salud Familiar Juan Soto Fernández",
            "code" => "118310",
            "comuna_id" => 8101
        ],
        [
            "name" => "Centro de Salud Familiar Carlos Pinto Fierro",
            "code" => "118311",
            "comuna_id" => 8102
        ],
        [
            "name" => "Centro de Salud Familiar Lagunillas",
            "code" => "118312",
            "comuna_id" => 8102
        ],
        [
            "name" => "Centro de Salud Familiar Yobilo",
            "code" => "118313",
            "comuna_id" => 8102
        ],
        [
            "name" => "Centro de Salud Familiar La Leonera",
            "code" => "118314",
            "comuna_id" => 8103
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Sergio Lagos Olave (ex Nº 4 Lota Bajo)",
            "code" => "118316",
            "comuna_id" => 8106
        ],
        [
            "name" => "Centro de Salud Familiar Santa Sabina",
            "code" => "118317",
            "comuna_id" => 8101
        ],
        [
            "name" => "Centro de Salud Familiar Lomas Coloradas",
            "code" => "118318",
            "comuna_id" => 8108
        ],
        [
            "name" => "Centro de Salud Familiar San Pedro de La Costa",
            "code" => "118319",
            "comuna_id" => 8108
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Juan Cartes Arias",
            "code" => "118325",
            "comuna_id" => 8106
        ],
        [
            "name" => "Centro de Salud Familiar Hualqui",
            "code" => "118326",
            "comuna_id" => 8105
        ],
        [
            "name" => "Posta de Salud Rural Copiulemu",
            "code" => "118400",
            "comuna_id" => 8104
        ],
        [
            "name" => "Posta de Salud Rural Manco",
            "code" => "118401",
            "comuna_id" => 8104
        ],
        [
            "name" => "Posta de Salud Rural Puerto Sur Isla Sta. María",
            "code" => "118402",
            "comuna_id" => 8102
        ],
        [
            "name" => "Posta de Salud Rural Puerto Norte Isla Sta. María",
            "code" => "118403",
            "comuna_id" => 8102
        ],
        [
            "name" => "Posta de Salud Rural Talcamávida",
            "code" => "118430",
            "comuna_id" => 8105
        ],
        [
            "name" => "Posta de Salud Rural Quilacoya",
            "code" => "118431",
            "comuna_id" => 8105
        ],
        [
            "name" => "Posta de Salud Rural La Generala",
            "code" => "118432",
            "comuna_id" => 8109
        ],
        [
            "name" => "Posta de Salud Rural Colico Alto",
            "code" => "118433",
            "comuna_id" => 8109
        ],
        [
            "name" => "Posta de Salud Rural Tanahuillín",
            "code" => "118434",
            "comuna_id" => 8109
        ],
        [
            "name" => "Posta de Salud Rural Chacay (Santa Juana)",
            "code" => "118435",
            "comuna_id" => 8109
        ],
        [
            "name" => "Posta de Salud Rural Torre Dorada",
            "code" => "118436",
            "comuna_id" => 8109
        ],
        [
            "name" => "Posta de Salud Rural Purgatorio",
            "code" => "118437",
            "comuna_id" => 8109
        ],
        [
            "name" => "Posta de Salud Rural Granerillos",
            "code" => "118439",
            "comuna_id" => 8104
        ],
        [
            "name" => "Posta de Salud Rural Cancha Los Monteros",
            "code" => "118441",
            "comuna_id" => 8104
        ],
        [
            "name" => "Posta de Salud Rural Roa",
            "code" => "118445",
            "comuna_id" => 8104
        ],
        [
            "name" => "Posta de Salud Rural Patagual",
            "code" => "118446",
            "comuna_id" => 8102
        ],
        [
            "name" => "Clínica Universitaria San Pedro de la Paz",
            "code" => "118500",
            "comuna_id" => 8108
        ],
        [
            "name" => "Laboratorio Clínico  Hasiles",
            "code" => "118501",
            "comuna_id" => 8101
        ],
        [
            "name" => "Laboratorio Dipreca",
            "code" => "118502",
            "comuna_id" => 8101
        ],
        [
            "name" => "Laboratorio Clínico Seres Ltda.",
            "code" => "118503",
            "comuna_id" => 8101
        ],
        [
            "name" => "Laboratorio Clínico Lincoyán",
            "code" => "118504",
            "comuna_id" => 8101
        ],
        [
            "name" => "Laboratorio Clínico Dr. Raúl Campos y Cía. Ltda.",
            "code" => "118505",
            "comuna_id" => 8101
        ],
        [
            "name" => "Laboratorio Clínico Dr. Gustavo Torrejón Sanhueza y Cía. Ltda.",
            "code" => "118506",
            "comuna_id" => 8101
        ],
        [
            "name" => "Laboratorio Clínico Tecnimed  Ltda.",
            "code" => "118507",
            "comuna_id" => 8101
        ],
        [
            "name" => "Laboratorio Clínico Dimet Ltda.",
            "code" => "118508",
            "comuna_id" => 8101
        ],
        [
            "name" => "Laboratorio  Clínico Diagonal",
            "code" => "118509",
            "comuna_id" => 8101
        ],
        [
            "name" => "Laboratorio  Clínico Castellón",
            "code" => "118510",
            "comuna_id" => 8101
        ],
        [
            "name" => "Laboratorio  Clínico Inmunomedica Ltda.",
            "code" => "118511",
            "comuna_id" => 8101
        ],
        [
            "name" => "Laboratorio  Clínico C.D.S",
            "code" => "118512",
            "comuna_id" => 8101
        ],
        [
            "name" => "Laboratorio  Clínico Schwerter",
            "code" => "118513",
            "comuna_id" => 8101
        ],
        [
            "name" => "Laboratorio  Clínico Labotem",
            "code" => "118514",
            "comuna_id" => 8103
        ],
        [
            "name" => "Laboratorio  Clínico Diagnomed",
            "code" => "118515",
            "comuna_id" => 8101
        ],
        [
            "name" => "Laboratorio Clínico de Exploración Renal",
            "code" => "118516",
            "comuna_id" => 8101
        ],
        [
            "name" => "Instituto de Rehabilitación Infantil TELETÓN (Concepción)",
            "code" => "118517",
            "comuna_id" => 8108
        ],
        [
            "name" => "Policlínico de la Asociación Chilena de Seguridad Coronel",
            "code" => "118518",
            "comuna_id" => 8102
        ],
        [
            "name" => "Hospital de Centro de Cumplimiento Penitenciario Biobío",
            "code" => "118519",
            "comuna_id" => 8101
        ],
        [
            "name" => "Laboratorio Clínico Dr. Fructuoso Biel y Cia Ltda.",
            "code" => "118522",
            "comuna_id" => 8101
        ],
        [
            "name" => "Laboratorio Clínico IMEDIM",
            "code" => "118523",
            "comuna_id" => 8101
        ],
        [
            "name" => "Centro médico radiológico concepción limitada.",
            "code" => "118524",
            "comuna_id" => 8101
        ],
        [
            "name" => "Laboratorio de Especialidades Medicas EMSA S.A",
            "code" => "118525",
            "comuna_id" => 8101
        ],
        [
            "name" => "COSAM de Coronel",
            "code" => "118600",
            "comuna_id" => 8102
        ],
        [
            "name" => "COSAM Comunitaria Lota",
            "code" => "118601",
            "comuna_id" => 8106
        ],
        [
            "name" => "Centro de Salud Familiar Villa Nonguén (Organizaciones sin fines de lucro y ONG)",
            "code" => "118609",
            "comuna_id" => 8101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Copiulemu",
            "code" => "118700",
            "comuna_id" => 8104
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Puerto Sur Isla Sta. María",
            "code" => "118702",
            "comuna_id" => 8102
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Colcura",
            "code" => "118704",
            "comuna_id" => 8106
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Boca Sur",
            "code" => "118708",
            "comuna_id" => 8108
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Lagunillas",
            "code" => "118712",
            "comuna_id" => 8102
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Escuadrón",
            "code" => "118713",
            "comuna_id" => 8102
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar  Hualqui",
            "code" => "118726",
            "comuna_id" => 8105
        ],
        [
            "name" => "SAPU-Boca Sur",
            "code" => "118802",
            "comuna_id" => 8108
        ],
        [
            "name" => "SAPU-Tucapel",
            "code" => "118806",
            "comuna_id" => 8101
        ],
        [
            "name" => "SAPU-Chiguayante",
            "code" => "118807",
            "comuna_id" => 8103
        ],
        [
            "name" => "SAPU-San Pedro de La Paz",
            "code" => "118808",
            "comuna_id" => 8108
        ],
        [
            "name" => "SAPU-Lorenzo Arenas",
            "code" => "118809",
            "comuna_id" => 8101
        ],
        [
            "name" => "SAPU-Juan Soto Fernández",
            "code" => "118810",
            "comuna_id" => 8101
        ],
        [
            "name" => "SAPU-Lagunillas",
            "code" => "118812",
            "comuna_id" => 8102
        ],
        [
            "name" => "SAPU-Yobilo",
            "code" => "118813",
            "comuna_id" => 8102
        ],
        [
            "name" => "SAPU-Leonera",
            "code" => "118814",
            "comuna_id" => 8103
        ],
        [
            "name" => "SAPU-Santa Sabina",
            "code" => "118817",
            "comuna_id" => 8101
        ],
        [
            "name" => "SAPU-Loma Colorada",
            "code" => "118818",
            "comuna_id" => 8108
        ],
        [
            "name" => "SAPU-Hualqui",
            "code" => "118826",
            "comuna_id" => 8105
        ],
        [
            "name" => "Actividades gestionadas por la Dirección del Servicio para apoyo de la Red (S.S de Talcahuano)",
            "code" => "119010",
            "comuna_id" => 8110
        ],
        [
            "name" => "PRAIS (S.S Talcahuano)",
            "code" => "119011",
            "comuna_id" => 8110
        ],
        [
            "name" => "Hospital Las Higueras (Talcahuano)",
            "code" => "119100",
            "comuna_id" => 8110
        ],
        [
            "name" => "Hospital de Tomé",
            "code" => "119101",
            "comuna_id" => 8111
        ],
        [
            "name" => "Hospital Penco - Lirquén",
            "code" => "119102",
            "comuna_id" => 8107
        ],
        [
            "name" => "Hospital Instituto de Seguridad  del Trabajo Talcahuano",
            "code" => "119200",
            "comuna_id" => 8110
        ],
        [
            "name" => "Policlínico de Atención Médica CAP ACERO ACHS Talcahuano",
            "code" => "119201",
            "comuna_id" => 8110
        ],
        [
            "name" => "Hospital Naval Almirante Adriazola",
            "code" => "119203",
            "comuna_id" => 8110
        ],
        [
            "name" => "Clínica Bio Bio",
            "code" => "119207",
            "comuna_id" => 8110
        ],
        [
            "name" => "Clínica Universitaria de Concepción",
            "code" => "119208",
            "comuna_id" => 8112
        ],
        [
            "name" => "Clínica de Atención Ambulatoria Mutual de Seguridad CChC Hualpén",
            "code" => "119212",
            "comuna_id" => 8112
        ],
        [
            "name" => "Laboratorio  Clínico YUEN",
            "code" => "119213",
            "comuna_id" => 8110
        ],
        [
            "name" => "Laboratorio  Clínico ITAMED",
            "code" => "119214",
            "comuna_id" => 8107
        ],
        [
            "name" => "Policlínico de Atención Médica CAP",
            "code" => "119215",
            "comuna_id" => 8112
        ],
        [
            "name" => "Policlínico de la Asociación Chilena de Seguridad Talcahuano",
            "code" => "119216",
            "comuna_id" => 8110
        ],
        [
            "name" => "Laboratorio Clínico Bio-Test",
            "code" => "119217",
            "comuna_id" => 8203
        ],
        [
            "name" => "Laboratorio Clínico San Pedro",
            "code" => "119218",
            "comuna_id" => 8203
        ],
        [
            "name" => "Centro de Salud Familiar Hualpencillo",
            "code" => "119301",
            "comuna_id" => 8112
        ],
        [
            "name" => "Centro de Salud Familiar San Vicente",
            "code" => "119302",
            "comuna_id" => 8110
        ],
        [
            "name" => "Centro de Salud Familiar Alcalde Leocán Portus",
            "code" => "119303",
            "comuna_id" => 8110
        ],
        [
            "name" => "Centro de Salud Familiar Penco",
            "code" => "119304",
            "comuna_id" => 8107
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Alberto Reyes",
            "code" => "119305",
            "comuna_id" => 8111
        ],
        [
            "name" => "Centro de Salud Familiar Bellavista",
            "code" => "119306",
            "comuna_id" => 8111
        ],
        [
            "name" => "Centro de Salud Familiar Paulina Avendaño Pereda",
            "code" => "119307",
            "comuna_id" => 8110
        ],
        [
            "name" => "Centro de Salud Familiar Los Cerros",
            "code" => "119308",
            "comuna_id" => 8110
        ],
        [
            "name" => "Centro de Salud Familiar Talcahuano Sur",
            "code" => "119309",
            "comuna_id" => 8112
        ],
        [
            "name" => "Centro de Salud Familiar La Floresta",
            "code" => "119310",
            "comuna_id" => 8112
        ],
        [
            "name" => "Centro de Salud Familiar Lirquén",
            "code" => "119311",
            "comuna_id" => 8107
        ],
        [
            "name" => "Posta de Salud Rural Tumbes",
            "code" => "119400",
            "comuna_id" => 8110
        ],
        [
            "name" => "Posta de Salud Rural Rafael",
            "code" => "119401",
            "comuna_id" => 8111
        ],
        [
            "name" => "Posta de Salud Rural Dichato",
            "code" => "119402",
            "comuna_id" => 8111
        ],
        [
            "name" => "Posta de Salud Rural Menque",
            "code" => "119403",
            "comuna_id" => 8111
        ],
        [
            "name" => "Posta de Salud Rural Coliumo",
            "code" => "119404",
            "comuna_id" => 8111
        ],
        [
            "name" => "COSAM Hualpén",
            "code" => "119601",
            "comuna_id" => 8112
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar España",
            "code" => "119701",
            "comuna_id" => 8112
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar 8 de Mayo",
            "code" => "119702",
            "comuna_id" => 8110
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Cosmito",
            "code" => "119703",
            "comuna_id" => 8107
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Los Forjadores",
            "code" => "119704",
            "comuna_id" => 8107
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Esmeralda",
            "code" => "119705",
            "comuna_id" => 8110
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Rene Schneider",
            "code" => "119706",
            "comuna_id" => 8112
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Llafkelen",
            "code" => "119707",
            "comuna_id" => 8112
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar El Santo Esfuerzo de Todos",
            "code" => "119708",
            "comuna_id" => 8111
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Leocán Portus Govinden",
            "code" => "119709",
            "comuna_id" => 8112
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Libertad Gaete",
            "code" => "119710",
            "comuna_id" => 8110
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Los Lobos la Gloria",
            "code" => "119711",
            "comuna_id" => 8110
        ],
        [
            "name" => "SAPU-Hualpencillo",
            "code" => "119801",
            "comuna_id" => 8112
        ],
        [
            "name" => "SAPU-San Vicente",
            "code" => "119802",
            "comuna_id" => 8110
        ],
        [
            "name" => "SAPU-Paulina Avendaño Pereda",
            "code" => "119803",
            "comuna_id" => 8110
        ],
        [
            "name" => "SAPU-Penco",
            "code" => "119804",
            "comuna_id" => 8107
        ],
        [
            "name" => "SAPU-Dr. Alberto Reyes",
            "code" => "119805",
            "comuna_id" => 8111
        ],
        [
            "name" => "SAPU-Alcalde Leocán Portus",
            "code" => "119807",
            "comuna_id" => 8110
        ],
        [
            "name" => "SAPU-Los Cerros",
            "code" => "119808",
            "comuna_id" => 8110
        ],
        [
            "name" => "SAPU-Talcahuano Sur",
            "code" => "119809",
            "comuna_id" => 8112
        ],
        [
            "name" => "Actividades gestionadas por la Dirección del Servicio para apoyo de la Red (S.S de Bíobío)",
            "code" => "120010",
            "comuna_id" => 8301
        ],
        [
            "name" => "PRAIS (S.S Bíobío)",
            "code" => "120011",
            "comuna_id" => 8301
        ],
        [
            "name" => "Clínica Dental Móvil Triple. Pat. UW9511 (Los Ángeles)",
            "code" => "120012",
            "comuna_id" => 8301
        ],
        [
            "name" => "Clínica Dental Móvil Triple. Pat. NW6995 (Santa Bárbara)",
            "code" => "120013",
            "comuna_id" => 8311
        ],
        [
            "name" => "Clínica Dental Móvil Triple. Pat. NW6996 (Laja)",
            "code" => "120014",
            "comuna_id" => 8304
        ],
        [
            "name" => "Complejo Asistencial Dr. Víctor Ríos Ruiz (Los Ángeles)",
            "code" => "120101",
            "comuna_id" => 8301
        ],
        [
            "name" => "Hospital Comunitario de Mulchén",
            "code" => "120102",
            "comuna_id" => 8305
        ],
        [
            "name" => "Hospital Comunitario de Nacimiento",
            "code" => "120103",
            "comuna_id" => 8306
        ],
        [
            "name" => "Hospital Comunitario de Yumbel",
            "code" => "120104",
            "comuna_id" => 8313
        ],
        [
            "name" => "Hospital Comunitario de Laja",
            "code" => "120105",
            "comuna_id" => 8304
        ],
        [
            "name" => "Hospital Comunitario de Santa Bárbara",
            "code" => "120106",
            "comuna_id" => 8311
        ],
        [
            "name" => "Hospital Comunitario Dr. Roberto Muñoz Urrutia de Huépil",
            "code" => "120107",
            "comuna_id" => 8312
        ],
        [
            "name" => "Policlínico AChS Los ángeles",
            "code" => "120202",
            "comuna_id" => 8301
        ],
        [
            "name" => "Centro CONIN Los Ángeles",
            "code" => "120204",
            "comuna_id" => 8301
        ],
        [
            "name" => "Clínica Adventista",
            "code" => "120205",
            "comuna_id" => 8301
        ],
        [
            "name" => "Policlínico AChS Subregional Nacimiento",
            "code" => "120207",
            "comuna_id" => 8306
        ],
        [
            "name" => "Clínica Los Andes",
            "code" => "120208",
            "comuna_id" => 8301
        ],
        [
            "name" => "Hospital Mutual de Seguridad CChC Los Ángeles",
            "code" => "120213",
            "comuna_id" => 8301
        ],
        [
            "name" => "Megasalud S.A. Centro Médico y Dental Los Ángeles",
            "code" => "120221",
            "comuna_id" => 8301
        ],
        [
            "name" => "Laboratorio Clínico Central Kojchen y Compañía Limitada",
            "code" => "120222",
            "comuna_id" => 8301
        ],
        [
            "name" => "Laboratorio Clínico Cordillera",
            "code" => "120223",
            "comuna_id" => 8301
        ],
        [
            "name" => "Laboratorio Clínico Biomec",
            "code" => "120224",
            "comuna_id" => 8303
        ],
        [
            "name" => "Vacunatorio Buena Salud",
            "code" => "120225",
            "comuna_id" => 8301
        ],
        [
            "name" => "Centro de Salud Familiar Nororiente de Los Ángeles",
            "code" => "120301",
            "comuna_id" => 8301
        ],
        [
            "name" => "Centro de Salud Familiar Santa Fe",
            "code" => "120302",
            "comuna_id" => 8301
        ],
        [
            "name" => "Centro de Salud Familiar Antuco",
            "code" => "120303",
            "comuna_id" => 8302
        ],
        [
            "name" => "Centro de Salud Familiar Monteaguila",
            "code" => "120304",
            "comuna_id" => 8303
        ],
        [
            "name" => "Centro de Salud Familiar Lautaro Cáceres Ramos",
            "code" => "120305",
            "comuna_id" => 8303
        ],
        [
            "name" => "Centro de Salud Familiar Quilleco",
            "code" => "120306",
            "comuna_id" => 8309
        ],
        [
            "name" => "Centro de Salud Familiar Yanequén",
            "code" => "120307",
            "comuna_id" => 8307
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Carlos Echeverría Véjar",
            "code" => "120308",
            "comuna_id" => 8310
        ],
        [
            "name" => "Centro de Salud Familiar 2 Septiembre",
            "code" => "120309",
            "comuna_id" => 8301
        ],
        [
            "name" => "Centro de Salud Familiar Norte de Los Ángeles",
            "code" => "120310",
            "comuna_id" => 8301
        ],
        [
            "name" => "Centro de Salud Familiar Paillihue",
            "code" => "120311",
            "comuna_id" => 8301
        ],
        [
            "name" => "Centro de Salud Familiar Ralco",
            "code" => "120312",
            "comuna_id" => 8314
        ],
        [
            "name" => "Centro de Salud Familiar Yumbel Estación",
            "code" => "120313",
            "comuna_id" => 8313
        ],
        [
            "name" => "Centro de Salud Familiar Canteras Villa Mercedes",
            "code" => "120314",
            "comuna_id" => 8309
        ],
        [
            "name" => "Centro de Salud Familiar Nuevo Horizonte",
            "code" => "120315",
            "comuna_id" => 8301
        ],
        [
            "name" => "Consultorio General Rural Quilaco",
            "code" => "120316",
            "comuna_id" => 8308
        ],
        [
            "name" => "Posta de Salud Rural Millantú",
            "code" => "120401",
            "comuna_id" => 8301
        ],
        [
            "name" => "Posta de Salud Rural Chacayal Norte",
            "code" => "120402",
            "comuna_id" => 8301
        ],
        [
            "name" => "Posta de Salud Rural El Durazno ( Los Ángeles)",
            "code" => "120403",
            "comuna_id" => 8301
        ],
        [
            "name" => "Posta de Salud Rural Los Molinos",
            "code" => "120404",
            "comuna_id" => 8301
        ],
        [
            "name" => "Posta de Salud Rural Llano Blanco",
            "code" => "120405",
            "comuna_id" => 8301
        ],
        [
            "name" => "Posta de Salud Rural Los Troncos",
            "code" => "120406",
            "comuna_id" => 8301
        ],
        [
            "name" => "Posta de Salud Rural El Peral",
            "code" => "120407",
            "comuna_id" => 8301
        ],
        [
            "name" => "Posta de Salud Rural San Carlos",
            "code" => "120408",
            "comuna_id" => 8301
        ],
        [
            "name" => "Posta de Salud Rural Mesamávida",
            "code" => "120409",
            "comuna_id" => 8301
        ],
        [
            "name" => "Posta de Salud Rural San Gerardo",
            "code" => "120410",
            "comuna_id" => 8301
        ],
        [
            "name" => "Posta de Salud Rural Dicahue",
            "code" => "120411",
            "comuna_id" => 8301
        ],
        [
            "name" => "Posta de Salud Rural Salto del Laja",
            "code" => "120412",
            "comuna_id" => 8301
        ],
        [
            "name" => "Posta de Salud Rural Los Robles (Los Ángeles)",
            "code" => "120413",
            "comuna_id" => 8301
        ],
        [
            "name" => "Posta de Salud Rural Alborada",
            "code" => "120414",
            "comuna_id" => 8301
        ],
        [
            "name" => "Posta de Salud Rural Los Canelos (Antuco)",
            "code" => "120415",
            "comuna_id" => 8302
        ],
        [
            "name" => "Posta de Salud Rural El Cisne",
            "code" => "120416",
            "comuna_id" => 8305
        ],
        [
            "name" => "Posta de Salud Rural Tierras Libres",
            "code" => "120417",
            "comuna_id" => 8305
        ],
        [
            "name" => "Posta de Salud Rural Santa Adriana",
            "code" => "120418",
            "comuna_id" => 8305
        ],
        [
            "name" => "Posta de Salud Rural La Colonia",
            "code" => "120419",
            "comuna_id" => 8304
        ],
        [
            "name" => "Posta de Salud Rural Santa Elena (Laja)",
            "code" => "120420",
            "comuna_id" => 8304
        ],
        [
            "name" => "Posta de Salud Rural Puente Perales",
            "code" => "120421",
            "comuna_id" => 8304
        ],
        [
            "name" => "Posta de Salud Rural Dollinco (Nacimiento)",
            "code" => "120422",
            "comuna_id" => 8306
        ],
        [
            "name" => "Posta de Salud Rural Culenco",
            "code" => "120423",
            "comuna_id" => 8306
        ],
        [
            "name" => "Posta de Salud Rural Choroico (Nacimiento)",
            "code" => "120424",
            "comuna_id" => 8306
        ],
        [
            "name" => "Posta de Salud Rural Coigue",
            "code" => "120425",
            "comuna_id" => 8307
        ],
        [
            "name" => "Posta de Salud Rural Millapoa",
            "code" => "120426",
            "comuna_id" => 8306
        ],
        [
            "name" => "Posta de Salud Rural Carrizal",
            "code" => "120427",
            "comuna_id" => 8306
        ],
        [
            "name" => "Posta de Salud Rural San Roque",
            "code" => "120428",
            "comuna_id" => 8306
        ],
        [
            "name" => "Posta de Salud Rural Rihue",
            "code" => "120429",
            "comuna_id" => 8307
        ],
        [
            "name" => "Posta de Salud Rural Rucamanqui",
            "code" => "120430",
            "comuna_id" => 8312
        ],
        [
            "name" => "Posta de Salud Rural Rucalhue",
            "code" => "120431",
            "comuna_id" => 8308
        ],
        [
            "name" => "Posta de Salud Rural Loncopangue",
            "code" => "120432",
            "comuna_id" => 8308
        ],
        [
            "name" => "Posta de Salud Rural Campamento",
            "code" => "120434",
            "comuna_id" => 8308
        ],
        [
            "name" => "Posta de Salud Rural Tinajón",
            "code" => "120435",
            "comuna_id" => 8309
        ],
        [
            "name" => "Posta de Salud Rural Turquía",
            "code" => "120436",
            "comuna_id" => 8310
        ],
        [
            "name" => "Posta de Salud Rural Piñiquihue",
            "code" => "120438",
            "comuna_id" => 8308
        ],
        [
            "name" => "Posta de Salud Rural Pitril",
            "code" => "120441",
            "comuna_id" => 8314
        ],
        [
            "name" => "Posta de Salud Rural Villucura",
            "code" => "120442",
            "comuna_id" => 8311
        ],
        [
            "name" => "Posta de Salud Rural El Huachi",
            "code" => "120443",
            "comuna_id" => 8311
        ],
        [
            "name" => "Posta de Salud Rural Callaqui",
            "code" => "120444",
            "comuna_id" => 8314
        ],
        [
            "name" => "Posta de Salud Rural Trapa Trapa",
            "code" => "120445",
            "comuna_id" => 8314
        ],
        [
            "name" => "Posta de Salud Rural Los Boldos",
            "code" => "120447",
            "comuna_id" => 8311
        ],
        [
            "name" => "Posta de Salud Rural Ralco Lepoy",
            "code" => "120448",
            "comuna_id" => 8314
        ],
        [
            "name" => "Posta de Salud Rural Malla Malla",
            "code" => "120449",
            "comuna_id" => 8314
        ],
        [
            "name" => "Posta de Salud Rural Malla Palmucho",
            "code" => "120450",
            "comuna_id" => 8314
        ],
        [
            "name" => "Posta de Salud Rural La Aguada",
            "code" => "120451",
            "comuna_id" => 8313
        ],
        [
            "name" => "Posta de Salud Rural Rere",
            "code" => "120452",
            "comuna_id" => 8313
        ],
        [
            "name" => "Posta de Salud Rural Tomeco",
            "code" => "120453",
            "comuna_id" => 8313
        ],
        [
            "name" => "Posta de Salud Rural Río Claro",
            "code" => "120454",
            "comuna_id" => 8313
        ],
        [
            "name" => "Posta de Salud Rural Chillancito",
            "code" => "120455",
            "comuna_id" => 8303
        ],
        [
            "name" => "Posta de Salud Rural Charrúa",
            "code" => "120456",
            "comuna_id" => 8303
        ],
        [
            "name" => "Posta de Salud Rural Colicheo",
            "code" => "120457",
            "comuna_id" => 8303
        ],
        [
            "name" => "Consultorio General Rural Tucapel",
            "code" => "120458",
            "comuna_id" => 8312
        ],
        [
            "name" => "Posta de Salud Rural Trupán",
            "code" => "120459",
            "comuna_id" => 8312
        ],
        [
            "name" => "Posta de Salud Rural Polcura",
            "code" => "120460",
            "comuna_id" => 8312
        ],
        [
            "name" => "Posta de Salud Rural Quinel",
            "code" => "120461",
            "comuna_id" => 8303
        ],
        [
            "name" => "Posta de Salud Rural Río Pardo",
            "code" => "120462",
            "comuna_id" => 8309
        ],
        [
            "name" => "Posta de Salud Rural Cañicura",
            "code" => "120463",
            "comuna_id" => 8309
        ],
        [
            "name" => "Posta de Salud Rural Cauñicú",
            "code" => "120464",
            "comuna_id" => 8314
        ],
        [
            "name" => "Posta de Salud Rural Mañihual",
            "code" => "120465",
            "comuna_id" => 8305
        ],
        [
            "name" => "Posta de Salud Rural Rapelco",
            "code" => "120466",
            "comuna_id" => 8305
        ],
        [
            "name" => "Posta de Salud Rural Chacayal Sur",
            "code" => "120467",
            "comuna_id" => 8301
        ],
        [
            "name" => "Posta de Salud Rural Virquenco",
            "code" => "120468",
            "comuna_id" => 8301
        ],
        [
            "name" => "Posta de Salud Rural Los Junquillos",
            "code" => "120469",
            "comuna_id" => 8311
        ],
        [
            "name" => "Posta de Salud Rural Alhuelemu",
            "code" => "120470",
            "comuna_id" => 8305
        ],
        [
            "name" => "Posta de Salud Rural Butalelbum",
            "code" => "120471",
            "comuna_id" => 8314
        ],
        [
            "name" => "Posta de Salud Rural El Castillo",
            "code" => "120472",
            "comuna_id" => 8311
        ],
        [
            "name" => "Posta de Salud Rural Canchillas",
            "code" => "120473",
            "comuna_id" => 8313
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Galvarino",
            "code" => "120701",
            "comuna_id" => 8301
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Mulchén",
            "code" => "120702",
            "comuna_id" => 8305
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Julio Hemmelmann",
            "code" => "120703",
            "comuna_id" => 8306
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Lautaro",
            "code" => "120704",
            "comuna_id" => 8306
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Los Pioneros",
            "code" => "120710",
            "comuna_id" => 8301
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Villa Los Ríos",
            "code" => "120711",
            "comuna_id" => 8301
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Los Carrera",
            "code" => "120780",
            "comuna_id" => 8301
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Las Azaleas",
            "code" => "120781",
            "comuna_id" => 8301
        ],
        [
            "name" => "SAPU-Lautaro Cáceres R",
            "code" => "120805",
            "comuna_id" => 8303
        ],
        [
            "name" => "SAPU-Paillihue",
            "code" => "120811",
            "comuna_id" => 8301
        ],
        [
            "name" => "SAPU-Norte de Los Ángeles",
            "code" => "120815",
            "comuna_id" => 8301
        ],
        [
            "name" => "Actividades gestionadas por la Dirección del Servicio para apoyo de la Red (S.S Araucanía Sur)",
            "code" => "121010",
            "comuna_id" => 9101
        ],
        [
            "name" => "PRAIS (S.S Araucanía Sur)",
            "code" => "121011",
            "comuna_id" => 9101
        ],
        [
            "name" => "Clínica Dental Móvil Doble. Pat. BBZV83 (Temuco)",
            "code" => "121012",
            "comuna_id" => 9101
        ],
        [
            "name" => "Clínica Dental Móvil Doble. Pat. BBZV84 (Temuco)",
            "code" => "121013",
            "comuna_id" => 9101
        ],
        [
            "name" => "Clínica Dental Móvil Doble. Pat. BBZV85 (Temuco)",
            "code" => "121014",
            "comuna_id" => 9101
        ],
        [
            "name" => "Hospital de Campaña Cruz Roja Noruega",
            "code" => "121050",
            "comuna_id" => 9114
        ],
        [
            "name" => "Hospital Dr. Hernán Henríquez Aravena (Temuco)",
            "code" => "121109",
            "comuna_id" => 9101
        ],
        [
            "name" => "Hospital Dr. Abraham Godoy (Lautaro)",
            "code" => "121110",
            "comuna_id" => 9108
        ],
        [
            "name" => "Hospital de Galvarino",
            "code" => "121111",
            "comuna_id" => 9106
        ],
        [
            "name" => "Hospital de Vilcún",
            "code" => "121112",
            "comuna_id" => 9119
        ],
        [
            "name" => "Hospital Dr. Eduardo González Galeno (Cunco)",
            "code" => "121113",
            "comuna_id" => 9103
        ],
        [
            "name" => "Hospital Intercultural de Nueva Imperial",
            "code" => "121114",
            "comuna_id" => 9111
        ],
        [
            "name" => "Hospital de Carahue",
            "code" => "121115",
            "comuna_id" => 9102
        ],
        [
            "name" => "Hospital Dr. Arturo Hillerns Larrañaga (Saavedra)",
            "code" => "121116",
            "comuna_id" => 9116
        ],
        [
            "name" => "Hospital de Pitrufquén",
            "code" => "121117",
            "comuna_id" => 9114
        ],
        [
            "name" => "Hospital de Toltén",
            "code" => "121118",
            "comuna_id" => 9118
        ],
        [
            "name" => "Hospital de Gorbea",
            "code" => "121119",
            "comuna_id" => 9107
        ],
        [
            "name" => "Hospital de Loncoche",
            "code" => "121120",
            "comuna_id" => 9109
        ],
        [
            "name" => "Hospital de Villarrica",
            "code" => "121121",
            "comuna_id" => 9120
        ],
        [
            "name" => "Hospital San Francisco (Pucón) (D)",
            "code" => "121200",
            "comuna_id" => 9115
        ],
        [
            "name" => "Hospital Maquehue-Pelal (Padre Las Casas) (D)",
            "code" => "121201",
            "comuna_id" => 9112
        ],
        [
            "name" => "Clínica Alemana de Temuco",
            "code" => "121202",
            "comuna_id" => 9101
        ],
        [
            "name" => "Hospital del Trabajador AChS de Temuco",
            "code" => "121205",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro CONIN Temuco",
            "code" => "121207",
            "comuna_id" => 9101
        ],
        [
            "name" => "Hospital Clínico de la Universidad Mayor",
            "code" => "121209",
            "comuna_id" => 9101
        ],
        [
            "name" => "Megasalud S.A. Centro Médico y Dental Temuco",
            "code" => "121245",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro de Salud Mutual CChC Temuco",
            "code" => "121246",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro de Diagnóstico y Tratamiento SIRESA",
            "code" => "121247",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro de Salud CIREPLAST",
            "code" => "121248",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro de Salud Mamodiagnosis",
            "code" => "121249",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro de la Cruz Roja Temuco",
            "code" => "121250",
            "comuna_id" => 9101
        ],
        [
            "name" => "Laboratorio Clínico Austral",
            "code" => "121251",
            "comuna_id" => 9101
        ],
        [
            "name" => "Laboratorio Clínico Dra. Ruth Schurch",
            "code" => "121252",
            "comuna_id" => 9101
        ],
        [
            "name" => "Laboratorio Clínico Bioanalisis",
            "code" => "121253",
            "comuna_id" => 9101
        ],
        [
            "name" => "Laboratorio Clínico Caupolican",
            "code" => "121254",
            "comuna_id" => 9101
        ],
        [
            "name" => "Laboratorio Clínico Central",
            "code" => "121255",
            "comuna_id" => 9101
        ],
        [
            "name" => "Laboratorio Clínico Imex",
            "code" => "121256",
            "comuna_id" => 9101
        ],
        [
            "name" => "Laboratorio de Inmunológica Labisur",
            "code" => "121257",
            "comuna_id" => 9101
        ],
        [
            "name" => "Laboratorio de Citopatología y Papanicolau",
            "code" => "121258",
            "comuna_id" => 9101
        ],
        [
            "name" => "Laboratorio Clínico Génesis",
            "code" => "121259",
            "comuna_id" => 9101
        ],
        [
            "name" => "Laboratorio Clínico Antumalal",
            "code" => "121260",
            "comuna_id" => 9101
        ],
        [
            "name" => "Laboratorio Clínico Neolab",
            "code" => "121261",
            "comuna_id" => 9101
        ],
        [
            "name" => "Laboratorio Clínico Medisur",
            "code" => "121262",
            "comuna_id" => 9101
        ],
        [
            "name" => "Laboratorio Citopatología Dra. Espejo",
            "code" => "121263",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro Diagnóstico Histopatología Citopatología",
            "code" => "121264",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro Radiológico y Ecotomografico Imagen",
            "code" => "121265",
            "comuna_id" => 9101
        ],
        [
            "name" => "Instituto de Mamografía Limitada",
            "code" => "121266",
            "comuna_id" => 9101
        ],
        [
            "name" => "Sociedad Inmunomédica Diagnóstico Temuco",
            "code" => "121267",
            "comuna_id" => 9101
        ],
        [
            "name" => "Laboratorio Clínico Pitrufquén",
            "code" => "121270",
            "comuna_id" => 9114
        ],
        [
            "name" => "Laboratorio Clínico Pucón",
            "code" => "121271",
            "comuna_id" => 9115
        ],
        [
            "name" => "Centro Radiológico Villarrica",
            "code" => "121272",
            "comuna_id" => 9120
        ],
        [
            "name" => "Laboratorio Clínico del Lago",
            "code" => "121273",
            "comuna_id" => 9120
        ],
        [
            "name" => "Centro de Salud Gendarmería de Chile (Temuco)",
            "code" => "121274",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro de Salud Regional de Gendarmería de Chile Región de La Araucanía",
            "code" => "121275",
            "comuna_id" => 9101
        ],
        [
            "name" => "SurImagen Ltda.",
            "code" => "121276",
            "comuna_id" => 9120
        ],
        [
            "name" => "Centro Médico y Dental de Carabineros de Chile Zona IX Araucanía",
            "code" => "121278",
            "comuna_id" => 9101
        ],
        [
            "name" => "Sociedad de Imagenología Clínica Bioimagen Ltda.",
            "code" => "121279",
            "comuna_id" => 9101
        ],
        [
            "name" => "Sociedad Inmunomédica Laboratorio",
            "code" => "121280",
            "comuna_id" => 9101
        ],
        [
            "name" => "Laboratorio Clínico Bionet S.A",
            "code" => "121281",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro de Salud Familiar Miraflores (Temuco)",
            "code" => "121303",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro de Salud Familiar Freire",
            "code" => "121304",
            "comuna_id" => 9105
        ],
        [
            "name" => "Centro de Salud Familiar Villa Alegre",
            "code" => "121305",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro de Salud Familiar Santa Rosa",
            "code" => "121306",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro de Salud Familiar Amanecer",
            "code" => "121307",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro de Salud Familiar Padre Las Casas",
            "code" => "121308",
            "comuna_id" => 9112
        ],
        [
            "name" => "Centro de Salud Familiar Pueblo Nuevo",
            "code" => "121309",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro de Salud Familiar Melipeuco",
            "code" => "121311",
            "comuna_id" => 9110
        ],
        [
            "name" => "Centro de Salud Familiar Teodoro Schmidt",
            "code" => "121312",
            "comuna_id" => 9117
        ],
        [
            "name" => "Consultorio Curarrehue",
            "code" => "121313",
            "comuna_id" => 9104
        ],
        [
            "name" => "Consultorio Perquenco",
            "code" => "121323",
            "comuna_id" => 9113
        ],
        [
            "name" => "Centro de Salud Familiar Los Laureles",
            "code" => "121326",
            "comuna_id" => 9103
        ],
        [
            "name" => "Centro de Salud Familiar Chol Chol",
            "code" => "121327",
            "comuna_id" => 9121
        ],
        [
            "name" => "Centro de Salud Familiar Trovolhue",
            "code" => "121328",
            "comuna_id" => 9102
        ],
        [
            "name" => "Centro de Salud Familiar Villarrica",
            "code" => "121334",
            "comuna_id" => 9120
        ],
        [
            "name" => "Centro de Salud Familiar Las Colinas",
            "code" => "121336",
            "comuna_id" => 9112
        ],
        [
            "name" => "Centro de Salud Familiar Quepe",
            "code" => "121337",
            "comuna_id" => 9105
        ],
        [
            "name" => "Consultorio Centro Salud Boroa-Filulawen (Organizaciones sin fines de lucro y ONG)",
            "code" => "121339",
            "comuna_id" => 9111
        ],
        [
            "name" => "Centro de Salud Familiar Nueva Imperial",
            "code" => "121341",
            "comuna_id" => 9111
        ],
        [
            "name" => "Centro de Salud Familiar Pulmahue",
            "code" => "121342",
            "comuna_id" => 9112
        ],
        [
            "name" => "Centro de Referencia de Salud Miraflores",
            "code" => "121343",
            "comuna_id" => 9101
        ],
        [
            "name" => "COSAM PRAIS",
            "code" => "121344",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro de Salud Familiar Lautaro",
            "code" => "121346",
            "comuna_id" => 9108
        ],
        [
            "name" => "Centro de Salud Familiar Pedro de Valdivia (Temuco)",
            "code" => "121347",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro de Salud Familiar Lican Ray",
            "code" => "121348",
            "comuna_id" => 9120
        ],
        [
            "name" => "Centro de Salud Familiar Hualpín",
            "code" => "121349",
            "comuna_id" => 9117
        ],
        [
            "name" => "Centro de Salud Familiar Labranza",
            "code" => "121350",
            "comuna_id" => 9101
        ],
        [
            "name" => "COSAM Padre las Casas",
            "code" => "121351",
            "comuna_id" => 9112
        ],
        [
            "name" => "Centro de Salud Docente Asistencial Monseñor Sergio Valech",
            "code" => "121352",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro de Salud Rural Pitrufquén",
            "code" => "121353",
            "comuna_id" => 9114
        ],
        [
            "name" => "Centro de Salud Urbano Los Volcanes",
            "code" => "121354",
            "comuna_id" => 9120
        ],
        [
            "name" => "Centro de Salud Rural Pucón",
            "code" => "121355",
            "comuna_id" => 9115
        ],
        [
            "name" => "Posta de Salud Rural La Piedra",
            "code" => "121416",
            "comuna_id" => 9106
        ],
        [
            "name" => "Posta de Salud Rural Cajón",
            "code" => "121456",
            "comuna_id" => 9119
        ],
        [
            "name" => "Posta de Salud Rural Labranza",
            "code" => "121457",
            "comuna_id" => 9101
        ],
        [
            "name" => "Posta de Salud Rural Roble Huacho",
            "code" => "121458",
            "comuna_id" => 9112
        ],
        [
            "name" => "Posta de Salud Rural Laurel Huacho",
            "code" => "121459",
            "comuna_id" => 9112
        ],
        [
            "name" => "Posta de Salud Rural Collimallín",
            "code" => "121460",
            "comuna_id" => 9101
        ],
        [
            "name" => "Posta de Salud Rural Truf Truf",
            "code" => "121461",
            "comuna_id" => 9112
        ],
        [
            "name" => "Posta de Salud Rural Pedregoso (Cunco)",
            "code" => "121462",
            "comuna_id" => 9103
        ],
        [
            "name" => "Posta de Salud Rural Conoco",
            "code" => "121463",
            "comuna_id" => 9101
        ],
        [
            "name" => "Posta de Salud Rural El Temo",
            "code" => "121464",
            "comuna_id" => 9116
        ],
        [
            "name" => "Posta de Salud Rural Quillem",
            "code" => "121465",
            "comuna_id" => 9113
        ],
        [
            "name" => "Posta de Salud Rural Rehuecoyan",
            "code" => "121466",
            "comuna_id" => 9113
        ],
        [
            "name" => "Posta de Salud Rural Pitraco",
            "code" => "121467",
            "comuna_id" => 9113
        ],
        [
            "name" => "Posta de Salud Rural Coihueco (Lautaro)",
            "code" => "121468",
            "comuna_id" => 9108
        ],
        [
            "name" => "Posta de Salud Rural Pillanlelbún",
            "code" => "121469",
            "comuna_id" => 9108
        ],
        [
            "name" => "Posta de Salud Rural Muco Chureo",
            "code" => "121470",
            "comuna_id" => 9108
        ],
        [
            "name" => "Posta de Salud Rural Dollinco (Lautaro)",
            "code" => "121471",
            "comuna_id" => 9108
        ],
        [
            "name" => "Posta de Salud Rural Colonia Lautaro",
            "code" => "121472",
            "comuna_id" => 9108
        ],
        [
            "name" => "Posta de Salud Rural Pumalal",
            "code" => "121473",
            "comuna_id" => 9108
        ],
        [
            "name" => "Posta de Salud Rural Blanco Lepín",
            "code" => "121474",
            "comuna_id" => 9108
        ],
        [
            "name" => "Posta de Salud Rural Ñereco",
            "code" => "121475",
            "comuna_id" => 9108
        ],
        [
            "name" => "Posta de Salud Rural Vega Redonda",
            "code" => "121476",
            "comuna_id" => 9119
        ],
        [
            "name" => "Posta de Salud Rural Cuel Ñielol",
            "code" => "121477",
            "comuna_id" => 9106
        ],
        [
            "name" => "Posta de Salud Rural Rapa - Mañiuco",
            "code" => "121478",
            "comuna_id" => 9106
        ],
        [
            "name" => "Posta de Salud Rural Nilpe",
            "code" => "121479",
            "comuna_id" => 9106
        ],
        [
            "name" => "Posta de Salud Rural Ailinco",
            "code" => "121480",
            "comuna_id" => 9106
        ],
        [
            "name" => "Posta de Salud Rural Repocura - Chacaico",
            "code" => "121481",
            "comuna_id" => 9106
        ],
        [
            "name" => "Posta de Salud Rural Fortín Ñielol",
            "code" => "121482",
            "comuna_id" => 9106
        ],
        [
            "name" => "Posta de Salud Rural Santa Carolina",
            "code" => "121483",
            "comuna_id" => 9106
        ],
        [
            "name" => "Posta de Salud Rural Rucatraro",
            "code" => "121484",
            "comuna_id" => 9106
        ],
        [
            "name" => "Posta de Salud Rural Cherquenco",
            "code" => "121485",
            "comuna_id" => 9119
        ],
        [
            "name" => "Posta de Salud Rural San Patricio",
            "code" => "121486",
            "comuna_id" => 9119
        ],
        [
            "name" => "Posta de Salud Rural General López",
            "code" => "121487",
            "comuna_id" => 9119
        ],
        [
            "name" => "Posta de Salud Rural Codinhue",
            "code" => "121488",
            "comuna_id" => 9119
        ],
        [
            "name" => "Posta de Salud Rural Quintrilpe",
            "code" => "121489",
            "comuna_id" => 9119
        ],
        [
            "name" => "Posta de Salud Rural Polul Coicoma",
            "code" => "121490",
            "comuna_id" => 9114
        ],
        [
            "name" => "Posta de Salud Rural Las Hortensias",
            "code" => "121491",
            "comuna_id" => 9103
        ],
        [
            "name" => "Posta de Salud Rural Villa García",
            "code" => "121492",
            "comuna_id" => 9103
        ],
        [
            "name" => "Posta de Salud Rural Leufuche",
            "code" => "121493",
            "comuna_id" => 9103
        ],
        [
            "name" => "Posta de Salud Rural Quecheregue",
            "code" => "121494",
            "comuna_id" => 9103
        ],
        [
            "name" => "Posta de Salud Rural Agua Tendida",
            "code" => "121495",
            "comuna_id" => 9102
        ],
        [
            "name" => "Posta de Salud Rural Huamaqui",
            "code" => "121496",
            "comuna_id" => 9121
        ],
        [
            "name" => "Posta de Salud Rural Huentelar",
            "code" => "121497",
            "comuna_id" => 9121
        ],
        [
            "name" => "Posta de Salud Rural Mañío Ducañán",
            "code" => "121498",
            "comuna_id" => 9111
        ],
        [
            "name" => "Posta de Salud Rural Chivilcoyan",
            "code" => "121499",
            "comuna_id" => 9111
        ],
        [
            "name" => "Posta de Salud Rural Bochoco",
            "code" => "121500",
            "comuna_id" => 9111
        ],
        [
            "name" => "Posta de Salud Rural Queupue",
            "code" => "121501",
            "comuna_id" => 9111
        ],
        [
            "name" => "Posta de Salud Rural Alto Boroa",
            "code" => "121502",
            "comuna_id" => 9111
        ],
        [
            "name" => "Posta de Salud Rural Rulo",
            "code" => "121503",
            "comuna_id" => 9111
        ],
        [
            "name" => "Posta de Salud Rural Huilío",
            "code" => "121504",
            "comuna_id" => 9105
        ],
        [
            "name" => "Posta de Salud Rural Pto. Domínguez",
            "code" => "121505",
            "comuna_id" => 9116
        ],
        [
            "name" => "Posta de Salud Rural Tranapuente",
            "code" => "121506",
            "comuna_id" => 9102
        ],
        [
            "name" => "Posta de Salud Rural La Cabaña",
            "code" => "121507",
            "comuna_id" => 9102
        ],
        [
            "name" => "Posta de Salud Rural Alto Yupehue",
            "code" => "121508",
            "comuna_id" => 9102
        ],
        [
            "name" => "Posta de Salud Rural Santa Celia",
            "code" => "121509",
            "comuna_id" => 9102
        ],
        [
            "name" => "Posta de Salud Rural Puyangue",
            "code" => "121510",
            "comuna_id" => 9102
        ],
        [
            "name" => "Posta de Salud Rural Los Placeres",
            "code" => "121511",
            "comuna_id" => 9102
        ],
        [
            "name" => "Posta de Salud Rural Coi Coi - Lobería",
            "code" => "121512",
            "comuna_id" => 9102
        ],
        [
            "name" => "Posta de Salud Rural La Sierra",
            "code" => "121513",
            "comuna_id" => 9116
        ],
        [
            "name" => "Posta de Salud Rural El Manzano (Carahue)",
            "code" => "121514",
            "comuna_id" => 9102
        ],
        [
            "name" => "Posta de Salud Rural Miramar",
            "code" => "121515",
            "comuna_id" => 9111
        ],
        [
            "name" => "Posta de Salud Rural Catripulli ( Carahue)",
            "code" => "121516",
            "comuna_id" => 9102
        ],
        [
            "name" => "Posta de Salud Rural Matte y Sánchez",
            "code" => "121517",
            "comuna_id" => 9102
        ],
        [
            "name" => "Posta de Salud Rural Hueñalihuén",
            "code" => "121518",
            "comuna_id" => 9102
        ],
        [
            "name" => "Posta de Salud Rural Loncoyamo",
            "code" => "121519",
            "comuna_id" => 9102
        ],
        [
            "name" => "Posta de Salud Rural Nehuentué",
            "code" => "121520",
            "comuna_id" => 9102
        ],
        [
            "name" => "Posta de Salud Rural Puaucho(Saavedra)",
            "code" => "121521",
            "comuna_id" => 9116
        ],
        [
            "name" => "Posta de Salud Rural Quifo -Oñoico",
            "code" => "121522",
            "comuna_id" => 9116
        ],
        [
            "name" => "Posta de Salud Rural Ranco",
            "code" => "121523",
            "comuna_id" => 9116
        ],
        [
            "name" => "Posta de Salud Rural Perquiñán",
            "code" => "121524",
            "comuna_id" => 9116
        ],
        [
            "name" => "Posta de Salud Rural Romopulli",
            "code" => "121525",
            "comuna_id" => 9116
        ],
        [
            "name" => "Posta de Salud Rural Piedra Alta",
            "code" => "121526",
            "comuna_id" => 9116
        ],
        [
            "name" => "Posta de Salud Rural Deume -Rucatraro",
            "code" => "121527",
            "comuna_id" => 9116
        ],
        [
            "name" => "Posta de Salud Rural Huapi - Budi",
            "code" => "121528",
            "comuna_id" => 9116
        ],
        [
            "name" => "Posta de Salud Rural Cheucán - Butaco",
            "code" => "121529",
            "comuna_id" => 9116
        ],
        [
            "name" => "Posta de Salud Rural Calof",
            "code" => "121530",
            "comuna_id" => 9116
        ],
        [
            "name" => "Posta de Salud Rural Comuy",
            "code" => "121531",
            "comuna_id" => 9114
        ],
        [
            "name" => "Posta de Salud Rural Los Galpones",
            "code" => "121532",
            "comuna_id" => 9114
        ],
        [
            "name" => "Posta de Salud Rural Millahuín",
            "code" => "121533",
            "comuna_id" => 9114
        ],
        [
            "name" => "Posta de Salud Rural Puraquina",
            "code" => "121534",
            "comuna_id" => 9114
        ],
        [
            "name" => "Posta de Salud Rural Mahuidanche",
            "code" => "121535",
            "comuna_id" => 9114
        ],
        [
            "name" => "Posta de Salud Rural Queule",
            "code" => "121536",
            "comuna_id" => 9118
        ],
        [
            "name" => "Posta de Salud Rural Villa Boldos",
            "code" => "121537",
            "comuna_id" => 9118
        ],
        [
            "name" => "Posta de Salud Rural Las Quemas (Toltén)",
            "code" => "121538",
            "comuna_id" => 9118
        ],
        [
            "name" => "Posta de Salud Rural Porma",
            "code" => "121539",
            "comuna_id" => 9117
        ],
        [
            "name" => "Posta de Salud Rural Pocoyan",
            "code" => "121540",
            "comuna_id" => 9118
        ],
        [
            "name" => "Posta de Salud Rural Boroa Sur",
            "code" => "121541",
            "comuna_id" => 9118
        ],
        [
            "name" => "Posta de Salud Rural Lastarria",
            "code" => "121542",
            "comuna_id" => 9107
        ],
        [
            "name" => "Posta de Salud Rural Quitratúe",
            "code" => "121543",
            "comuna_id" => 9107
        ],
        [
            "name" => "Posta de Salud Rural Pidenco",
            "code" => "121544",
            "comuna_id" => 9107
        ],
        [
            "name" => "Posta de Salud Rural Huellanto Alto",
            "code" => "121545",
            "comuna_id" => 9107
        ],
        [
            "name" => "Posta de Salud Rural Licancullín",
            "code" => "121546",
            "comuna_id" => 9118
        ],
        [
            "name" => "Posta de Salud Rural Huiscapi",
            "code" => "121547",
            "comuna_id" => 9109
        ],
        [
            "name" => "Posta de Salud Rural La Paz",
            "code" => "121548",
            "comuna_id" => 9109
        ],
        [
            "name" => "Posta de Salud Rural Pulmahue",
            "code" => "121549",
            "comuna_id" => 9109
        ],
        [
            "name" => "Posta de Salud Rural Copihuelpe",
            "code" => "121550",
            "comuna_id" => 9109
        ],
        [
            "name" => "Posta de Salud Rural Molco ( Loncoche )",
            "code" => "121551",
            "comuna_id" => 9109
        ],
        [
            "name" => "Posta de Salud Rural Ñancul",
            "code" => "121553",
            "comuna_id" => 9120
        ],
        [
            "name" => "Posta de Salud Rural Liumalla",
            "code" => "121555",
            "comuna_id" => 9120
        ],
        [
            "name" => "Posta de Salud Rural Manhue",
            "code" => "121556",
            "comuna_id" => 9109
        ],
        [
            "name" => "Posta de Salud Rural Caburga",
            "code" => "121558",
            "comuna_id" => 9115
        ],
        [
            "name" => "Posta de Salud Rural Paillaco",
            "code" => "121559",
            "comuna_id" => 9115
        ],
        [
            "name" => "Posta de Salud Rural Quelhue",
            "code" => "121560",
            "comuna_id" => 9115
        ],
        [
            "name" => "Posta de Salud Rural Pangueco (Galvarino)",
            "code" => "121561",
            "comuna_id" => 9106
        ],
        [
            "name" => "Posta de Salud Rural Radal",
            "code" => "121562",
            "comuna_id" => 9105
        ],
        [
            "name" => "Posta de Salud Rural Allipén",
            "code" => "121563",
            "comuna_id" => 9105
        ],
        [
            "name" => "Posta de Salud Rural Quetroco",
            "code" => "121564",
            "comuna_id" => 9105
        ],
        [
            "name" => "Posta de Salud Rural Coipué (Freire)",
            "code" => "121565",
            "comuna_id" => 9105
        ],
        [
            "name" => "Posta de Salud Rural Lliuco(Freire)",
            "code" => "121566",
            "comuna_id" => 9105
        ],
        [
            "name" => "Posta de Salud Rural San Ramón",
            "code" => "121567",
            "comuna_id" => 9112
        ],
        [
            "name" => "Posta de Salud Rural Guiñimo",
            "code" => "121568",
            "comuna_id" => 9105
        ],
        [
            "name" => "Posta de Salud Rural Santa María Llaima",
            "code" => "121570",
            "comuna_id" => 9110
        ],
        [
            "name" => "Posta de Salud Rural Alto Carén",
            "code" => "121571",
            "comuna_id" => 9110
        ],
        [
            "name" => "Posta de Salud Rural Cumcumllaque",
            "code" => "121572",
            "comuna_id" => 9110
        ],
        [
            "name" => "Posta de Salud Rural San Pedro de Pucón",
            "code" => "121573",
            "comuna_id" => 9115
        ],
        [
            "name" => "Posta de Salud Rural Barros Arana",
            "code" => "121575",
            "comuna_id" => 9117
        ],
        [
            "name" => "Posta de Salud Rural Pichichelle",
            "code" => "121576",
            "comuna_id" => 9117
        ],
        [
            "name" => "Posta de Salud Rural Yenehue",
            "code" => "121577",
            "comuna_id" => 9117
        ],
        [
            "name" => "Posta de Salud Rural Número Tres",
            "code" => "121578",
            "comuna_id" => 9116
        ],
        [
            "name" => "Posta de Salud Rural Nohualhue",
            "code" => "121579",
            "comuna_id" => 9117
        ],
        [
            "name" => "Posta de Salud Rural Malalche",
            "code" => "121580",
            "comuna_id" => 9121
        ],
        [
            "name" => "Posta de Salud Rural Catripulli ( Curarrehue )",
            "code" => "121581",
            "comuna_id" => 9104
        ],
        [
            "name" => "Posta de Salud Rural Maite",
            "code" => "121582",
            "comuna_id" => 9104
        ],
        [
            "name" => "Posta de Salud Rural Reigolil",
            "code" => "121583",
            "comuna_id" => 9104
        ],
        [
            "name" => "Posta de Salud Rural Faja Ricci",
            "code" => "121584",
            "comuna_id" => 9107
        ],
        [
            "name" => "Posta de Salud Rural Liuco (Gorbea)",
            "code" => "121585",
            "comuna_id" => 9107
        ],
        [
            "name" => "Posta de Salud Rural Quiñenahuín",
            "code" => "121586",
            "comuna_id" => 9104
        ],
        [
            "name" => "Posta de Salud Rural Epeukura",
            "code" => "121587",
            "comuna_id" => 9104
        ],
        [
            "name" => "Posta de Salud Rural Molco (Nueva Imperial )",
            "code" => "121588",
            "comuna_id" => 9111
        ],
        [
            "name" => "Posta de Salud Rural Chucauco",
            "code" => "121589",
            "comuna_id" => 9105
        ],
        [
            "name" => "Posta de Salud Rural El Escudo",
            "code" => "121590",
            "comuna_id" => 9108
        ],
        [
            "name" => "Posta de Salud Rural Vega Larga",
            "code" => "121591",
            "comuna_id" => 9108
        ],
        [
            "name" => "Posta de Salud Rural Codopille",
            "code" => "121592",
            "comuna_id" => 9112
        ],
        [
            "name" => "Posta de Salud Rural Metrenco",
            "code" => "121593",
            "comuna_id" => 9112
        ],
        [
            "name" => "Posta de Salud Rural Santa Rosa",
            "code" => "121594",
            "comuna_id" => 9108
        ],
        [
            "name" => "Posta de Salud Rural La Esperanza",
            "code" => "121596",
            "comuna_id" => 9103
        ],
        [
            "name" => "Posta de Salud Rural Puralaco - Puerto Esperanza",
            "code" => "121597",
            "comuna_id" => 9118
        ],
        [
            "name" => "Posta de Salud Rural Caren-Trancura",
            "code" => "121598",
            "comuna_id" => 9104
        ],
        [
            "name" => "Posta de Salud Rural Añilco",
            "code" => "121599",
            "comuna_id" => 9120
        ],
        [
            "name" => "COSAM Amanecer",
            "code" => "121600",
            "comuna_id" => 9101
        ],
        [
            "name" => "COSAM Temuco",
            "code" => "121601",
            "comuna_id" => 9101
        ],
        [
            "name" => "COSAM Padre Las Casas",
            "code" => "121602",
            "comuna_id" => 9112
        ],
        [
            "name" => "Centro de Salud Familiar Metodista (Organizaciones sin fines de lucro y ONG)",
            "code" => "121657",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Villa el Salar",
            "code" => "121780",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar 21 de Mayo",
            "code" => "121781",
            "comuna_id" => 9120
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Arquenco",
            "code" => "121782",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Los Volcanes",
            "code" => "121783",
            "comuna_id" => 9120
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar El Carmen",
            "code" => "121784",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro Comunitario de Salud San Antonio",
            "code" => "121785",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Ultraestación",
            "code" => "121786",
            "comuna_id" => 9114
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Guacolda",
            "code" => "121787",
            "comuna_id" => 9108
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Las Quilas",
            "code" => "121788",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Dr. Maximino Beltran Mora",
            "code" => "121789",
            "comuna_id" => 9108
        ],
        [
            "name" => "SAPU-Miraflores (Temuco)",
            "code" => "121803",
            "comuna_id" => 9101
        ],
        [
            "name" => "SAPU-Santa Rosa",
            "code" => "121806",
            "comuna_id" => 9101
        ],
        [
            "name" => "SAPU-Padre Las Casas",
            "code" => "121808",
            "comuna_id" => 9112
        ],
        [
            "name" => "Actividades gestionadas por la Dirección del Servicio para apoyo de la Red (S.S de Valdivia)",
            "code" => "122010",
            "comuna_id" => 14101
        ],
        [
            "name" => "PRAIS (S.S. Valdivia)",
            "code" => "122011",
            "comuna_id" => 14101
        ],
        [
            "name" => "Clínica Dental Móvil A Rural Triple. Pat. BKYS94 (Valdivia)",
            "code" => "122012",
            "comuna_id" => 14101
        ],
        [
            "name" => "Clínica Dental Móvil B Urbana Triple. Pat. BKYS92 (Valdivia)",
            "code" => "122013",
            "comuna_id" => 14101
        ],
        [
            "name" => "Hospital Clínico Regional (Valdivia)",
            "code" => "122100",
            "comuna_id" => 14101
        ],
        [
            "name" => "Hospital de Corral",
            "code" => "122101",
            "comuna_id" => 14102
        ],
        [
            "name" => "Hospital de Los Lagos",
            "code" => "122102",
            "comuna_id" => 14104
        ],
        [
            "name" => "Hospital de Lanco",
            "code" => "122103",
            "comuna_id" => 14103
        ],
        [
            "name" => "Hospital Juan Morey (La Unión)",
            "code" => "122104",
            "comuna_id" => 14201
        ],
        [
            "name" => "Hospital de Río Bueno",
            "code" => "122105",
            "comuna_id" => 14204
        ],
        [
            "name" => "Hospital de Paillaco",
            "code" => "122106",
            "comuna_id" => 14107
        ],
        [
            "name" => "Hospital de Mariquina",
            "code" => "122200",
            "comuna_id" => 14106
        ],
        [
            "name" => "Hospital Padre Bernabé de Lucerna (Panguipulli) (D)",
            "code" => "122201",
            "comuna_id" => 14108
        ],
        [
            "name" => "Clínica Alemana Valdivia",
            "code" => "122202",
            "comuna_id" => 14101
        ],
        [
            "name" => "Clínica Mutual de Seguridad CChC Valdivia",
            "code" => "122203",
            "comuna_id" => 14101
        ],
        [
            "name" => "Centro CONIN Valdivia",
            "code" => "122204",
            "comuna_id" => 14101
        ],
        [
            "name" => "Megasalud S.A Centro Médico y Dental Valdivia",
            "code" => "122213",
            "comuna_id" => 14101
        ],
        [
            "name" => "Clínica del Trabajador AChS",
            "code" => "122215",
            "comuna_id" => 14201
        ],
        [
            "name" => "Policlínico Carabineros Valdivia",
            "code" => "122216",
            "comuna_id" => 14101
        ],
        [
            "name" => "Centro Clínico Militar",
            "code" => "122217",
            "comuna_id" => 14101
        ],
        [
            "name" => "Centro de Salud Universidad Austral de Chile",
            "code" => "122218",
            "comuna_id" => 14101
        ],
        [
            "name" => "Centro de Salud Masisa",
            "code" => "122219",
            "comuna_id" => 14101
        ],
        [
            "name" => "Policlínico Astilleros y Servicios Navales ASENAV",
            "code" => "122220",
            "comuna_id" => 14101
        ],
        [
            "name" => "Centro Penitenciario Valdivia",
            "code" => "122221",
            "comuna_id" => 14101
        ],
        [
            "name" => "Policlínico Infodema",
            "code" => "122222",
            "comuna_id" => 14101
        ],
        [
            "name" => "Centro de Salud Mutual CChC La Unión",
            "code" => "122223",
            "comuna_id" => 14201
        ],
        [
            "name" => "Centro de Salud AChS Río Bueno",
            "code" => "122224",
            "comuna_id" => 14204
        ],
        [
            "name" => "Clínica Collico",
            "code" => "122225",
            "comuna_id" => 14101
        ],
        [
            "name" => "Clínica del Trabajador AChS de Valdivia",
            "code" => "122226",
            "comuna_id" => 14101
        ],
        [
            "name" => "Centro Médico Beaucheff",
            "code" => "122227",
            "comuna_id" => 14101
        ],
        [
            "name" => "Surmedica",
            "code" => "122228",
            "comuna_id" => 14101
        ],
        [
            "name" => "CMA Costanera",
            "code" => "122229",
            "comuna_id" => 14101
        ],
        [
            "name" => "Centro Odontológico Costanera",
            "code" => "122230",
            "comuna_id" => 14101
        ],
        [
            "name" => "Policlínico de Atención Primaria Gendarmería de Chile",
            "code" => "122231",
            "comuna_id" => 14204
        ],
        [
            "name" => "Policlínico Regional de Gendarmería",
            "code" => "122232",
            "comuna_id" => 14101
        ],
        [
            "name" => "Laboratorio Clínico Mordoj Cía. Ltda. (Sede calle Maipú)",
            "code" => "122233",
            "comuna_id" => 14101
        ],
        [
            "name" => "Laboratorio Clínico Mordoj Cía. Ltda. (Sede calle Beauchef)",
            "code" => "122234",
            "comuna_id" => 14101
        ],
        [
            "name" => "Laboratorio Clínico Sociedad Cruz y Guiresse Ltda.",
            "code" => "122235",
            "comuna_id" => 14101
        ],
        [
            "name" => "Laboratorio de la Clínica Alemana de Valdivia",
            "code" => "122236",
            "comuna_id" => 14101
        ],
        [
            "name" => "Laboratorio Clínico e Inversiones Médicas y Diagnósticas Ltda.",
            "code" => "122237",
            "comuna_id" => 14101
        ],
        [
            "name" => "Sociedad Laboratorio Especialidades Médicas Ltda.",
            "code" => "122238",
            "comuna_id" => 14101
        ],
        [
            "name" => "Sociedad laboratorio Clínico Unión Ltda.",
            "code" => "122239",
            "comuna_id" => 14201
        ],
        [
            "name" => "Laboratorio Austral Ltda.",
            "code" => "122240",
            "comuna_id" => 14201
        ],
        [
            "name" => "Laboratorio Sociedad Andrade Salas y Cía. Ltda.",
            "code" => "122241",
            "comuna_id" => 14104
        ],
        [
            "name" => "Laboratorio Frilab",
            "code" => "122242",
            "comuna_id" => 14108
        ],
        [
            "name" => "Laboratorio Clínico Suranálilsis Ltda.",
            "code" => "122243",
            "comuna_id" => 14204
        ],
        [
            "name" => "Laboratorio Clínico y Especialidades Ltda",
            "code" => "122244",
            "comuna_id" => 14101
        ],
        [
            "name" => "Laboratorio de Nefrología e Histocompatibilidad Universidad Austral de Chile",
            "code" => "122245",
            "comuna_id" => 14101
        ],
        [
            "name" => "Laboratorio Clínico Laboclin-Uach",
            "code" => "122246",
            "comuna_id" => 14101
        ],
        [
            "name" => "Laboratorio de Histología  y Citopatología Valdivia Ltda.",
            "code" => "122247",
            "comuna_id" => 14101
        ],
        [
            "name" => "Laboratorio Clínico Bionet S.A",
            "code" => "122248",
            "comuna_id" => 14101
        ],
        [
            "name" => "Laboratorio Beneficiencia Osorno",
            "code" => "122249",
            "comuna_id" => 14201
        ],
        [
            "name" => "Centro de Salud FamiliarExterno Valdivia",
            "code" => "122300",
            "comuna_id" => 14101
        ],
        [
            "name" => "Centro de Salud Familiar Las Ánimas",
            "code" => "122301",
            "comuna_id" => 14101
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Jorge Sabat Gozalo (Ex Gil de Castro)",
            "code" => "122302",
            "comuna_id" => 14101
        ],
        [
            "name" => "Centro de Salud FamiliarSan José la Mariquina",
            "code" => "122303",
            "comuna_id" => 14106
        ],
        [
            "name" => "Centro de Salud Familiar Panguipulli",
            "code" => "122304",
            "comuna_id" => 14108
        ],
        [
            "name" => "Centro de Salud FamiliarBelarmina Paredes",
            "code" => "122305",
            "comuna_id" => 14202
        ],
        [
            "name" => "Centro de Salud FamiliarJuan Santa María Bonet",
            "code" => "122306",
            "comuna_id" => 14203
        ],
        [
            "name" => "Centro de Salud FamiliarMáfil",
            "code" => "122307",
            "comuna_id" => 14105
        ],
        [
            "name" => "Centro de Salud FamiliarCoñaripe",
            "code" => "122308",
            "comuna_id" => 14108
        ],
        [
            "name" => "Centro de Salud FamiliarChoshuenco",
            "code" => "122309",
            "comuna_id" => 14108
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Alfredo Gantz Mann",
            "code" => "122310",
            "comuna_id" => 14201
        ],
        [
            "name" => "Centro de Salud FamiliarMalalhue",
            "code" => "122311",
            "comuna_id" => 14103
        ],
        [
            "name" => "Centro de Salud FamiliarRío Bueno",
            "code" => "122312",
            "comuna_id" => 14204
        ],
        [
            "name" => "Centro de Salud Familiar Niebla",
            "code" => "122313",
            "comuna_id" => 14101
        ],
        [
            "name" => "Centro de Salud Familiar Angachilla",
            "code" => "122314",
            "comuna_id" => 14101
        ],
        [
            "name" => "Consultorio Paillaco",
            "code" => "122315",
            "comuna_id" => 14107
        ],
        [
            "name" => "Centro de Salud FamiliarLos Lagos",
            "code" => "122316",
            "comuna_id" => 14104
        ],
        [
            "name" => "Posta de Salud Rural Punucapa",
            "code" => "122400",
            "comuna_id" => 14101
        ],
        [
            "name" => "Posta de Salud Rural Huellelhue",
            "code" => "122401",
            "comuna_id" => 14101
        ],
        [
            "name" => "Posta de Salud Rural Curiñanco",
            "code" => "122402",
            "comuna_id" => 14101
        ],
        [
            "name" => "Posta de Salud Rural Isla del Rey",
            "code" => "122404",
            "comuna_id" => 14102
        ],
        [
            "name" => "Posta de Salud Rural Chaihuín",
            "code" => "122405",
            "comuna_id" => 14102
        ],
        [
            "name" => "Posta de Salud Rural El Salto",
            "code" => "122406",
            "comuna_id" => 14104
        ],
        [
            "name" => "Posta de Salud Rural Las Huellas",
            "code" => "122407",
            "comuna_id" => 14104
        ],
        [
            "name" => "Posta de Salud Rural Antilhue",
            "code" => "122408",
            "comuna_id" => 14104
        ],
        [
            "name" => "Posta de Salud Rural Riñihue",
            "code" => "122409",
            "comuna_id" => 14104
        ],
        [
            "name" => "Posta de Salud Rural Folilco",
            "code" => "122410",
            "comuna_id" => 14104
        ],
        [
            "name" => "Posta de Salud Rural Malihue",
            "code" => "122411",
            "comuna_id" => 14104
        ],
        [
            "name" => "Posta de Salud Rural Melefquén",
            "code" => "122413",
            "comuna_id" => 14108
        ],
        [
            "name" => "Posta de Salud Rural Chan Chan",
            "code" => "122414",
            "comuna_id" => 14106
        ],
        [
            "name" => "Posta de Salud Rural Mehuín",
            "code" => "122415",
            "comuna_id" => 14106
        ],
        [
            "name" => "Posta de Salud Rural Mississippi",
            "code" => "122416",
            "comuna_id" => 14106
        ],
        [
            "name" => "Posta de Salud Rural Pelchuquín",
            "code" => "122417",
            "comuna_id" => 14106
        ],
        [
            "name" => "Posta de Salud Rural Ciruelos",
            "code" => "122418",
            "comuna_id" => 14106
        ],
        [
            "name" => "Posta de Salud Rural Alepué",
            "code" => "122419",
            "comuna_id" => 14106
        ],
        [
            "name" => "Posta de Salud Rural Iñipulli",
            "code" => "122420",
            "comuna_id" => 14106
        ],
        [
            "name" => "Posta de Salud Rural Huitag",
            "code" => "122421",
            "comuna_id" => 14108
        ],
        [
            "name" => "Posta de Salud Rural Neltume",
            "code" => "122422",
            "comuna_id" => 14108
        ],
        [
            "name" => "Posta de Salud Rural Liquiñe",
            "code" => "122425",
            "comuna_id" => 14108
        ],
        [
            "name" => "Posta de Salud Rural Pirihueico",
            "code" => "122426",
            "comuna_id" => 14108
        ],
        [
            "name" => "Posta de Salud Rural Cayumapu",
            "code" => "122427",
            "comuna_id" => 14108
        ],
        [
            "name" => "Posta de Salud Rural Catamutún",
            "code" => "122428",
            "comuna_id" => 14201
        ],
        [
            "name" => "Posta de Salud Rural Puerto Nuevo",
            "code" => "122429",
            "comuna_id" => 14201
        ],
        [
            "name" => "Posta de Salud Rural Choroico (La Unión)",
            "code" => "122430",
            "comuna_id" => 14201
        ],
        [
            "name" => "Posta de Salud Rural Pilpilcahuín",
            "code" => "122431",
            "comuna_id" => 14201
        ],
        [
            "name" => "Posta de Salud Rural Traiguén ( La Unión)",
            "code" => "122432",
            "comuna_id" => 14201
        ],
        [
            "name" => "Posta de Salud Rural Llancacura",
            "code" => "122433",
            "comuna_id" => 14201
        ],
        [
            "name" => "Posta de Salud Rural Crucero (Río Bueno)",
            "code" => "122434",
            "comuna_id" => 14204
        ],
        [
            "name" => "Posta de Salud Rural Vivanco",
            "code" => "122435",
            "comuna_id" => 14204
        ],
        [
            "name" => "Posta de Salud Rural Carimallín",
            "code" => "122436",
            "comuna_id" => 14204
        ],
        [
            "name" => "Posta de Salud Rural Trapi",
            "code" => "122437",
            "comuna_id" => 14204
        ],
        [
            "name" => "Posta de Salud Rural Cayurruca",
            "code" => "122438",
            "comuna_id" => 14204
        ],
        [
            "name" => "Posta de Salud Rural Futahuente",
            "code" => "122439",
            "comuna_id" => 14204
        ],
        [
            "name" => "Posta de Salud Rural Reumén",
            "code" => "122440",
            "comuna_id" => 14107
        ],
        [
            "name" => "Posta de Salud Rural Pichirropulli",
            "code" => "122441",
            "comuna_id" => 14107
        ],
        [
            "name" => "Posta de Salud Rural Aguas Negras",
            "code" => "122442",
            "comuna_id" => 14107
        ],
        [
            "name" => "Posta de Salud Rural Arquilhue",
            "code" => "122443",
            "comuna_id" => 14202
        ],
        [
            "name" => "Posta de Salud Rural Loncopán",
            "code" => "122444",
            "comuna_id" => 14202
        ],
        [
            "name" => "Posta de Salud Rural Maihue",
            "code" => "122445",
            "comuna_id" => 14202
        ],
        [
            "name" => "Posta de Salud Rural Huapi",
            "code" => "122446",
            "comuna_id" => 14202
        ],
        [
            "name" => "Posta de Salud Rural Llifén",
            "code" => "122447",
            "comuna_id" => 14202
        ],
        [
            "name" => "Posta de Salud Rural Pitriuco",
            "code" => "122448",
            "comuna_id" => 14203
        ],
        [
            "name" => "Posta de Salud Rural Illahuape",
            "code" => "122449",
            "comuna_id" => 14203
        ],
        [
            "name" => "Posta de Salud Rural Riñinahue",
            "code" => "122450",
            "comuna_id" => 14203
        ],
        [
            "name" => "Posta de Salud Rural Morrompulli",
            "code" => "122451",
            "comuna_id" => 14101
        ],
        [
            "name" => "Posta de Salud Rural Bocatoma",
            "code" => "122452",
            "comuna_id" => 14108
        ],
        [
            "name" => "Posta de Salud Rural Santa Elisa",
            "code" => "122453",
            "comuna_id" => 14201
        ],
        [
            "name" => "Posta de Salud Rural Mashue",
            "code" => "122454",
            "comuna_id" => 14201
        ],
        [
            "name" => "Posta de Salud Rural Mantilhue",
            "code" => "122455",
            "comuna_id" => 14204
        ],
        [
            "name" => "Posta de Salud Rural Santa Rosa (Paillaco)",
            "code" => "122456",
            "comuna_id" => 14107
        ],
        [
            "name" => "Posta de Salud Rural Santa Filomena (Paillaco)",
            "code" => "122457",
            "comuna_id" => 14107
        ],
        [
            "name" => "Posta de Salud Rural Calcurrupe",
            "code" => "122458",
            "comuna_id" => 14203
        ],
        [
            "name" => "Posta de Salud Rural Huichaco",
            "code" => "122459",
            "comuna_id" => 14105
        ],
        [
            "name" => "Posta de Salud Rural Pocura",
            "code" => "122460",
            "comuna_id" => 14203
        ],
        [
            "name" => "Posta de Salud Rural Rupumeica",
            "code" => "122461",
            "comuna_id" => 14203
        ],
        [
            "name" => "Posta de Salud Rural Los Esteros",
            "code" => "122462",
            "comuna_id" => 14201
        ],
        [
            "name" => "Posta de Salud Rural de Nontuela",
            "code" => "122463",
            "comuna_id" => 14202
        ],
        [
            "name" => "Posta de Salud Rural Lago Neltume",
            "code" => "122464",
            "comuna_id" => 14108
        ],
        [
            "name" => "Posta de Salud Rural Pellinada",
            "code" => "122465",
            "comuna_id" => 14104
        ],
        [
            "name" => "COSAM Comunitario Las Animas",
            "code" => "122601",
            "comuna_id" => 14101
        ],
        [
            "name" => "COSAM Angachilla",
            "code" => "122602",
            "comuna_id" => 14101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Barrios Bajos",
            "code" => "122700",
            "comuna_id" => 14101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Consultorio Las Ánimas",
            "code" => "122701",
            "comuna_id" => 14101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Gil de Castro",
            "code" => "122702",
            "comuna_id" => 14101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Mehuín",
            "code" => "122703",
            "comuna_id" => 14106
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Neltume",
            "code" => "122709",
            "comuna_id" => 14108
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Los Lagos",
            "code" => "122710",
            "comuna_id" => 14201
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Cons. Angachilla",
            "code" => "122714",
            "comuna_id" => 14101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Manuel Miranda",
            "code" => "122716",
            "comuna_id" => 14104
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Pablo Neruda",
            "code" => "122720",
            "comuna_id" => 14101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Dr. Silva de La Paz (San Francisco)",
            "code" => "122723",
            "comuna_id" => 14106
        ],
        [
            "name" => "SAPU-Las Ánimas",
            "code" => "122801",
            "comuna_id" => 14101
        ],
        [
            "name" => "SAPU-Gil de Castro",
            "code" => "122802",
            "comuna_id" => 14101
        ],
        [
            "name" => "SAPU-La Unión - Dr. Alfredo Gantz Mann",
            "code" => "122810",
            "comuna_id" => 14201
        ],
        [
            "name" => "SAPU-Malalhue",
            "code" => "122811",
            "comuna_id" => 14103
        ],
        [
            "name" => "SAPU-Río Bueno",
            "code" => "122812",
            "comuna_id" => 14204
        ],
        [
            "name" => "SAPU-Angachilla",
            "code" => "122814",
            "comuna_id" => 14101
        ],
        [
            "name" => "Actividades gestionadas por la Dirección del Servicio para apoyo de la Red (S.S de Osorno)",
            "code" => "123010",
            "comuna_id" => 10301
        ],
        [
            "name" => "PRAIS (S.S Osorno)",
            "code" => "123011",
            "comuna_id" => 10301
        ],
        [
            "name" => "Clínica Dental Móvil Triple. Pat. BKYZ91 (Osorno)",
            "code" => "123012",
            "comuna_id" => 10301
        ],
        [
            "name" => "Departamento de Atención Integral Funcionarios",
            "code" => "123030",
            "comuna_id" => 10301
        ],
        [
            "name" => "Hospital Base San José de Osorno",
            "code" => "123100",
            "comuna_id" => 10301
        ],
        [
            "name" => "Hospital de Purranque",
            "code" => "123101",
            "comuna_id" => 10303
        ],
        [
            "name" => "Hospital de Río Negro",
            "code" => "123102",
            "comuna_id" => 10305
        ],
        [
            "name" => "Hospital de Puerto Octay",
            "code" => "123103",
            "comuna_id" => 10302
        ],
        [
            "name" => "Hospital Misión San Juan de la Costa",
            "code" => "123104",
            "comuna_id" => 10306
        ],
        [
            "name" => "Hospital del Perpetuo Socorro de Quilacahuín",
            "code" => "123105",
            "comuna_id" => 10307
        ],
        [
            "name" => "Clínica Alemana de Osorno",
            "code" => "123203",
            "comuna_id" => 10301
        ],
        [
            "name" => "Centro de Salud Mutual CChC Osorno",
            "code" => "123205",
            "comuna_id" => 10301
        ],
        [
            "name" => "Megasalud S.A. Centro Médico y Dental Osorno",
            "code" => "123206",
            "comuna_id" => 10301
        ],
        [
            "name" => "Centro de Rehabilitación de Minusválidos",
            "code" => "123207",
            "comuna_id" => 10303
        ],
        [
            "name" => "Clínica de la AChS Osorno",
            "code" => "123209",
            "comuna_id" => 10301
        ],
        [
            "name" => "Policlínico de la AChS Purranque",
            "code" => "123210",
            "comuna_id" => 10303
        ],
        [
            "name" => "Vacunatorio Sociedad Centro Médico Cochrane SA",
            "code" => "123212",
            "comuna_id" => 10301
        ],
        [
            "name" => "Clínica Oftalmológica Survisión",
            "code" => "123213",
            "comuna_id" => 10301
        ],
        [
            "name" => "Policlínico del Instituto de Seguridad del Trabajo Osorno",
            "code" => "123214",
            "comuna_id" => 10301
        ],
        [
            "name" => "Centro de Diálisis Dial Sur",
            "code" => "123215",
            "comuna_id" => 10301
        ],
        [
            "name" => "Centro Médico y Laboratorio Cochrane",
            "code" => "123216",
            "comuna_id" => 10301
        ],
        [
            "name" => "Laboratorio Luis Pasteur",
            "code" => "123217",
            "comuna_id" => 10301
        ],
        [
            "name" => "Laboratorio CENDIMET",
            "code" => "123218",
            "comuna_id" => 10301
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Pedro Jáuregui",
            "code" => "123300",
            "comuna_id" => 10301
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Marcelo Lopetegui Adams",
            "code" => "123301",
            "comuna_id" => 10301
        ],
        [
            "name" => "Centro de Salud Familiar Ovejería",
            "code" => "123302",
            "comuna_id" => 10301
        ],
        [
            "name" => "Centro de Salud Familiar Rahue Alto",
            "code" => "123303",
            "comuna_id" => 10301
        ],
        [
            "name" => "Centro de Salud Familiar Entre Lagos",
            "code" => "123304",
            "comuna_id" => 10304
        ],
        [
            "name" => "Centro de Salud Familiar San Pablo",
            "code" => "123305",
            "comuna_id" => 10307
        ],
        [
            "name" => "Centro de Salud Familiar Pampa Alegre",
            "code" => "123306",
            "comuna_id" => 10301
        ],
        [
            "name" => "Centro de Salud Familiar Purranque",
            "code" => "123307",
            "comuna_id" => 10303
        ],
        [
            "name" => "Centro de Salud Familiar Practicante Pablo Araya (Ex Río Negro)",
            "code" => "123309",
            "comuna_id" => 10305
        ],
        [
            "name" => "Centro de Salud Familiar Quinto Centenario",
            "code" => "123310",
            "comuna_id" => 10301
        ],
        [
            "name" => "Centro de Salud Familiar Bahía Mansa",
            "code" => "123311",
            "comuna_id" => 10306
        ],
        [
            "name" => "Centro de Salud Familiar Puaucho",
            "code" => "123312",
            "comuna_id" => 10306
        ],
        [
            "name" => "Posta de Salud Rural Cuinco",
            "code" => "123402",
            "comuna_id" => 10306
        ],
        [
            "name" => "Posta de Salud Rural Pichi Damas",
            "code" => "123404",
            "comuna_id" => 10301
        ],
        [
            "name" => "Posta de Salud Rural Puyehue",
            "code" => "123406",
            "comuna_id" => 10304
        ],
        [
            "name" => "Posta de Salud Rural Desagüe Rupanco",
            "code" => "123407",
            "comuna_id" => 10304
        ],
        [
            "name" => "Posta de Salud Rural Ñadi Pichi-Damas",
            "code" => "123408",
            "comuna_id" => 10304
        ],
        [
            "name" => "Posta de Salud Rural Tres Esteros",
            "code" => "123410",
            "comuna_id" => 10305
        ],
        [
            "name" => "Posta de Salud Rural Corte Alto",
            "code" => "123411",
            "comuna_id" => 10303
        ],
        [
            "name" => "Posta de Salud Rural Crucero ( Purranque)",
            "code" => "123412",
            "comuna_id" => 10303
        ],
        [
            "name" => "Posta de Salud Rural Coligual",
            "code" => "123413",
            "comuna_id" => 10303
        ],
        [
            "name" => "Posta de Salud Rural Hueyusca",
            "code" => "123414",
            "comuna_id" => 10303
        ],
        [
            "name" => "Posta de Salud Rural Concordia",
            "code" => "123415",
            "comuna_id" => 10303
        ],
        [
            "name" => "Posta de Salud Rural Colonia Ponce",
            "code" => "123416",
            "comuna_id" => 10303
        ],
        [
            "name" => "Posta de Salud Rural La Naranja",
            "code" => "123417",
            "comuna_id" => 10303
        ],
        [
            "name" => "Posta de Salud Rural San Pedro de Purranque",
            "code" => "123419",
            "comuna_id" => 10303
        ],
        [
            "name" => "Posta de Salud Rural Collihuinco",
            "code" => "123420",
            "comuna_id" => 10303
        ],
        [
            "name" => "Posta de Salud Rural Rupanco",
            "code" => "123422",
            "comuna_id" => 10302
        ],
        [
            "name" => "Posta de Salud Rural Cascadas",
            "code" => "123423",
            "comuna_id" => 10302
        ],
        [
            "name" => "Posta de Salud Rural Piedras Negras",
            "code" => "123424",
            "comuna_id" => 10302
        ],
        [
            "name" => "Posta de Salud Rural Cancura",
            "code" => "123425",
            "comuna_id" => 10301
        ],
        [
            "name" => "Posta de Salud Rural Pellinada",
            "code" => "123426",
            "comuna_id" => 10302
        ],
        [
            "name" => "Posta de Salud Rural La Calo",
            "code" => "123427",
            "comuna_id" => 10302
        ],
        [
            "name" => "Posta de Salud Rural Coihueco (Puerto Octay)",
            "code" => "123428",
            "comuna_id" => 10302
        ],
        [
            "name" => "Posta de Salud Rural Purrehuín",
            "code" => "123430",
            "comuna_id" => 10306
        ],
        [
            "name" => "Posta de Salud Rural Aleucapi",
            "code" => "123431",
            "comuna_id" => 10306
        ],
        [
            "name" => "Posta de Salud Rural La Poza",
            "code" => "123432",
            "comuna_id" => 10307
        ],
        [
            "name" => "Posta de Salud Rural Huilma",
            "code" => "123434",
            "comuna_id" => 10305
        ],
        [
            "name" => "Posta de Salud Rural Pucopio",
            "code" => "123435",
            "comuna_id" => 10307
        ],
        [
            "name" => "Posta de Salud Rural Chanco ( San Pablo )",
            "code" => "123436",
            "comuna_id" => 10307
        ],
        [
            "name" => "Posta de Salud Rural Currimáhuida",
            "code" => "123437",
            "comuna_id" => 10307
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Murrinumo",
            "code" => "123700",
            "comuna_id" => 10301
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Manuel Rodríguez",
            "code" => "123701",
            "comuna_id" => 10301
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar El Encanto",
            "code" => "123705",
            "comuna_id" => 10304
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Riachuelo",
            "code" => "123709",
            "comuna_id" => 10305
        ],
        [
            "name" => "SAPU-Dr. Pedro Jáuregui",
            "code" => "123800",
            "comuna_id" => 10301
        ],
        [
            "name" => "SAPU-Rahue Alto",
            "code" => "123801",
            "comuna_id" => 10301
        ],
        [
            "name" => "Actividades gestionadas por la Dirección del Servicio para apoyo de la Red (S.S Del Reloncaví)",
            "code" => "124010",
            "comuna_id" => 10101
        ],
        [
            "name" => "PRAIS (S.S Del Reloncaví)",
            "code" => "124011",
            "comuna_id" => 10101
        ],
        [
            "name" => "Clínica Dental Móvil Triple. Pat. BKYS89 (Puerto Montt)",
            "code" => "124012",
            "comuna_id" => 10101
        ],
        [
            "name" => "Hospital de Puerto Montt",
            "code" => "124105",
            "comuna_id" => 10101
        ],
        [
            "name" => "Hospital de Llanquihue",
            "code" => "124110",
            "comuna_id" => 10107
        ],
        [
            "name" => "Hospital de Frutillar",
            "code" => "124115",
            "comuna_id" => 10105
        ],
        [
            "name" => "Hospital de Fresia",
            "code" => "124120",
            "comuna_id" => 10104
        ],
        [
            "name" => "Hospital de Maullín",
            "code" => "124125",
            "comuna_id" => 10108
        ],
        [
            "name" => "Hospital de Calbuco",
            "code" => "124130",
            "comuna_id" => 10102
        ],
        [
            "name" => "Hospital de Palena",
            "code" => "124140",
            "comuna_id" => 10404
        ],
        [
            "name" => "Hospital de Futaleufú",
            "code" => "124145",
            "comuna_id" => 10402
        ],
        [
            "name" => "Clínica de Puerto Varas SpA.",
            "code" => "124210",
            "comuna_id" => 10109
        ],
        [
            "name" => "Centro CONIN Puerto Montt",
            "code" => "124230",
            "comuna_id" => 10101
        ],
        [
            "name" => "Clínica Instituto de Seguridad del Trabajo Puerto Montt",
            "code" => "124240",
            "comuna_id" => 10101
        ],
        [
            "name" => "Clínica Puerto Montt",
            "code" => "124250",
            "comuna_id" => 10101
        ],
        [
            "name" => "Clínica de la AChS Puerto Montt",
            "code" => "124251",
            "comuna_id" => 10101
        ],
        [
            "name" => "Clínica Universitaria de Puerto Montt S.A.",
            "code" => "124260",
            "comuna_id" => 10101
        ],
        [
            "name" => "Megasalud S.A. Centro Médico y Dental Puerto Montt",
            "code" => "124273",
            "comuna_id" => 10101
        ],
        [
            "name" => "Clínica Complejo Penitenciario de Puerto Montt",
            "code" => "124274",
            "comuna_id" => 10101
        ],
        [
            "name" => "Centro de Atención Profesional de Enfermería (CAPROEN)",
            "code" => "124275",
            "comuna_id" => 10101
        ],
        [
            "name" => "Centro de Diálisis Puerto Varas",
            "code" => "124277",
            "comuna_id" => 10109
        ],
        [
            "name" => "Centro Nefrológico Puerto Montt",
            "code" => "124278",
            "comuna_id" => 10101
        ],
        [
            "name" => "Centro de Diálisis Hemosur",
            "code" => "124279",
            "comuna_id" => 10101
        ],
        [
            "name" => "Policlínico Naval de Puerto Montt",
            "code" => "124280",
            "comuna_id" => 10101
        ],
        [
            "name" => "Instituto de Rehabilitación Infantil TELETÓN (Puerto Montt)",
            "code" => "124281",
            "comuna_id" => 10101
        ],
        [
            "name" => "Policlínico de la Mutual de Seguridad CChC Puerto Montt",
            "code" => "124282",
            "comuna_id" => 10101
        ],
        [
            "name" => "Centro Médico y Dental La Araucana Puerto Montt",
            "code" => "124283",
            "comuna_id" => 10101
        ],
        [
            "name" => "Centro Médico y Dental Xa. Zona de Carabineros",
            "code" => "124284",
            "comuna_id" => 10101
        ],
        [
            "name" => "Laboratorio Clínico Labemed",
            "code" => "124285",
            "comuna_id" => 10101
        ],
        [
            "name" => "Laboratorio Clínico Meditest Ltda",
            "code" => "124286",
            "comuna_id" => 10101
        ],
        [
            "name" => "Laboratorio Clínico y Hematológico Basoalto y Rojas Ltda",
            "code" => "124287",
            "comuna_id" => 10101
        ],
        [
            "name" => "Laboratorio Clínico Biomed",
            "code" => "124288",
            "comuna_id" => 10101
        ],
        [
            "name" => "Laboratorio Clínico Bionet",
            "code" => "124289",
            "comuna_id" => 10101
        ],
        [
            "name" => "Centro de Salud Familiar Angelmó",
            "code" => "124305",
            "comuna_id" => 10101
        ],
        [
            "name" => "Centro de Salud Familiar Antonio Varas",
            "code" => "124310",
            "comuna_id" => 10101
        ],
        [
            "name" => "Centro de Salud Familiar Carmela Carvajal",
            "code" => "124315",
            "comuna_id" => 10101
        ],
        [
            "name" => "Centro de Salud Familiar Techo para todos (ONG)",
            "code" => "124320",
            "comuna_id" => 10101
        ],
        [
            "name" => "Centro de Salud Familiar Carelmapu",
            "code" => "124325",
            "comuna_id" => 10108
        ],
        [
            "name" => "Centro de Salud Familiar Los Muermos",
            "code" => "124330",
            "comuna_id" => 10106
        ],
        [
            "name" => "Centro de Salud Familia Nº 1 Puerto Varas",
            "code" => "124335",
            "comuna_id" => 10109
        ],
        [
            "name" => "Centro de Salud Familiar Frutillar Alto",
            "code" => "124365",
            "comuna_id" => 10105
        ],
        [
            "name" => "Centro de Salud Familiar Los Volcanes",
            "code" => "124370",
            "comuna_id" => 10107
        ],
        [
            "name" => "Centro de Salud Familiar Río Negro Hornopirén",
            "code" => "124380",
            "comuna_id" => 10403
        ],
        [
            "name" => "Centro de Salud Familiar Padre Hurtado",
            "code" => "124381",
            "comuna_id" => 10101
        ],
        [
            "name" => "Centro de Salud Familiar San Pablo Mirasol (ONG)",
            "code" => "124385",
            "comuna_id" => 10101
        ],
        [
            "name" => "Centro de Salud Familiar Alerce",
            "code" => "124395",
            "comuna_id" => 10101
        ],
        [
            "name" => "Centro de Salud Familiar Calbuco",
            "code" => "124396",
            "comuna_id" => 10102
        ],
        [
            "name" => "Posta de Salud Rural Lago Chapo",
            "code" => "124401",
            "comuna_id" => 10101
        ],
        [
            "name" => "Posta de Salud Rural Correntoso",
            "code" => "124402",
            "comuna_id" => 10101
        ],
        [
            "name" => "Posta de Salud Rural Chaicas",
            "code" => "124403",
            "comuna_id" => 10101
        ],
        [
            "name" => "Posta de Salud Rural Lenca",
            "code" => "124404",
            "comuna_id" => 10101
        ],
        [
            "name" => "Posta de Salud Rural Las Quemas (Puerto Montt)",
            "code" => "124405",
            "comuna_id" => 10101
        ],
        [
            "name" => "Posta de Salud Rural Maillén",
            "code" => "124406",
            "comuna_id" => 10101
        ],
        [
            "name" => "Posta de Salud Rural Salto Grande",
            "code" => "124407",
            "comuna_id" => 10101
        ],
        [
            "name" => "Posta de Salud Rural Salto Chico",
            "code" => "124408",
            "comuna_id" => 10101
        ],
        [
            "name" => "Posta de Salud Rural Trapén",
            "code" => "124409",
            "comuna_id" => 10101
        ],
        [
            "name" => "Posta de Salud Rural Panitao",
            "code" => "124410",
            "comuna_id" => 10101
        ],
        [
            "name" => "Posta de Salud Rural Cochamó",
            "code" => "124411",
            "comuna_id" => 10103
        ],
        [
            "name" => "Posta de Salud Rural Río Puelo",
            "code" => "124412",
            "comuna_id" => 10103
        ],
        [
            "name" => "Posta de Salud Rural Sotomó",
            "code" => "124413",
            "comuna_id" => 10103
        ],
        [
            "name" => "Posta de Salud Rural Llanada Grande",
            "code" => "124414",
            "comuna_id" => 10103
        ],
        [
            "name" => "Posta de Salud Rural Paso El Bolsón o Segundo Corral",
            "code" => "124415",
            "comuna_id" => 10103
        ],
        [
            "name" => "Posta de Salud Rural Paso El León",
            "code" => "124416",
            "comuna_id" => 10103
        ],
        [
            "name" => "Posta de Salud Rural Aulén",
            "code" => "124417",
            "comuna_id" => 10403
        ],
        [
            "name" => "Posta de Salud Rural Rolecha",
            "code" => "124418",
            "comuna_id" => 10403
        ],
        [
            "name" => "Posta de Salud Rural Contao",
            "code" => "124419",
            "comuna_id" => 10403
        ],
        [
            "name" => "Posta de Salud Rural Hualaihué",
            "code" => "124420",
            "comuna_id" => 10403
        ],
        [
            "name" => "Posta de Salud Rural Ensenada",
            "code" => "124421",
            "comuna_id" => 10109
        ],
        [
            "name" => "Posta de Salud Rural Peulla",
            "code" => "124422",
            "comuna_id" => 10109
        ],
        [
            "name" => "Posta de Salud Rural Nueva Braunau",
            "code" => "124423",
            "comuna_id" => 10109
        ],
        [
            "name" => "Posta de Salud Rural Petrohué",
            "code" => "124424",
            "comuna_id" => 10109
        ],
        [
            "name" => "Posta de Salud Rural Colonia Río Sur",
            "code" => "124425",
            "comuna_id" => 10109
        ],
        [
            "name" => "Posta de Salud Rural Ralún",
            "code" => "124426",
            "comuna_id" => 10109
        ],
        [
            "name" => "Posta de Salud Rural Loncotoro",
            "code" => "124427",
            "comuna_id" => 10107
        ],
        [
            "name" => "Posta de Salud Rural Pellines (Llanquihue)",
            "code" => "124428",
            "comuna_id" => 10107
        ],
        [
            "name" => "Posta de Salud Rural Colegual",
            "code" => "124429",
            "comuna_id" => 10107
        ],
        [
            "name" => "Posta de Salud Rural Casma",
            "code" => "124430",
            "comuna_id" => 10105
        ],
        [
            "name" => "Posta de Salud Rural Centinela",
            "code" => "124432",
            "comuna_id" => 10105
        ],
        [
            "name" => "Posta de Salud Rural Parga",
            "code" => "124433",
            "comuna_id" => 10104
        ],
        [
            "name" => "Posta de Salud Rural Tegualda",
            "code" => "124434",
            "comuna_id" => 10104
        ],
        [
            "name" => "Posta de Salud Rural Polizones",
            "code" => "124435",
            "comuna_id" => 10104
        ],
        [
            "name" => "Posta de Salud Rural Cau-Cau",
            "code" => "124436",
            "comuna_id" => 10104
        ],
        [
            "name" => "Posta de Salud Rural Mañío",
            "code" => "124437",
            "comuna_id" => 10104
        ],
        [
            "name" => "Posta de Salud Rural El Mirador",
            "code" => "124438",
            "comuna_id" => 10104
        ],
        [
            "name" => "Posta de Salud Rural Traiguén (Fresia)",
            "code" => "124439",
            "comuna_id" => 10104
        ],
        [
            "name" => "Posta de Salud Rural Las Cruces ( Fresia)",
            "code" => "124440",
            "comuna_id" => 10104
        ],
        [
            "name" => "Posta de Salud Rural Línea Sin Nombre",
            "code" => "124441",
            "comuna_id" => 10104
        ],
        [
            "name" => "Posta de Salud Rural Carelmapu",
            "code" => "124442",
            "comuna_id" => 10108
        ],
        [
            "name" => "Posta de Salud Rural Misquihue",
            "code" => "124443",
            "comuna_id" => 10108
        ],
        [
            "name" => "Posta de Salud Rural Peñol",
            "code" => "124444",
            "comuna_id" => 10108
        ],
        [
            "name" => "Posta de Salud Rural Astillero",
            "code" => "124445",
            "comuna_id" => 10108
        ],
        [
            "name" => "Posta de Salud Rural La Pasada",
            "code" => "124446",
            "comuna_id" => 10108
        ],
        [
            "name" => "Posta de Salud Rural Quenuir",
            "code" => "124447",
            "comuna_id" => 10108
        ],
        [
            "name" => "Posta de Salud Rural Pargua",
            "code" => "124448",
            "comuna_id" => 10102
        ],
        [
            "name" => "Posta de Salud Rural Putenio",
            "code" => "124449",
            "comuna_id" => 10102
        ],
        [
            "name" => "Posta de Salud Rural Texas",
            "code" => "124450",
            "comuna_id" => 10102
        ],
        [
            "name" => "Posta de Salud Rural Aguantao",
            "code" => "124451",
            "comuna_id" => 10102
        ],
        [
            "name" => "Posta de Salud Rural Peñasmo",
            "code" => "124452",
            "comuna_id" => 10102
        ],
        [
            "name" => "Posta de Salud Rural Avellanal",
            "code" => "124453",
            "comuna_id" => 10102
        ],
        [
            "name" => "Posta de Salud Rural Tabón",
            "code" => "124454",
            "comuna_id" => 10102
        ],
        [
            "name" => "Posta de Salud Rural Huar - Alfaro",
            "code" => "124455",
            "comuna_id" => 10102
        ],
        [
            "name" => "Posta de Salud Rural Chauquear",
            "code" => "124456",
            "comuna_id" => 10102
        ],
        [
            "name" => "Posta de Salud Rural Chayahue",
            "code" => "124457",
            "comuna_id" => 10102
        ],
        [
            "name" => "Posta de Salud Rural Pergue",
            "code" => "124458",
            "comuna_id" => 10102
        ],
        [
            "name" => "Posta de Salud Rural Quetrulauquén",
            "code" => "124459",
            "comuna_id" => 10102
        ],
        [
            "name" => "Posta de Salud Rural San Antonio (Calbuco)",
            "code" => "124460",
            "comuna_id" => 10102
        ],
        [
            "name" => "Posta de Salud Rural San Agustín (Calbuco)",
            "code" => "124461",
            "comuna_id" => 10102
        ],
        [
            "name" => "Posta de Salud Rural Cañitas",
            "code" => "124462",
            "comuna_id" => 10106
        ],
        [
            "name" => "Posta de Salud Rural Los Piques",
            "code" => "124463",
            "comuna_id" => 10106
        ],
        [
            "name" => "Posta de Salud Rural Cumbre Alta",
            "code" => "124464",
            "comuna_id" => 10106
        ],
        [
            "name" => "Posta de Salud Rural Quillagua (Los Muermos)",
            "code" => "124465",
            "comuna_id" => 10106
        ],
        [
            "name" => "Posta de Salud Rural Chulín",
            "code" => "124518",
            "comuna_id" => 10401
        ],
        [
            "name" => "Posta de Salud Rural Buill",
            "code" => "124519",
            "comuna_id" => 10401
        ],
        [
            "name" => "Posta de Salud Rural Talcán",
            "code" => "124520",
            "comuna_id" => 10401
        ],
        [
            "name" => "Posta de Salud Rural Nayahue - Auteni",
            "code" => "124521",
            "comuna_id" => 10401
        ],
        [
            "name" => "Posta de Salud Rural Chumeldén",
            "code" => "124530",
            "comuna_id" => 10401
        ],
        [
            "name" => "Posta de Salud Rural Ayacara",
            "code" => "124531",
            "comuna_id" => 10401
        ],
        [
            "name" => "Posta de Salud Rural El Frío o Santa Lucía",
            "code" => "124532",
            "comuna_id" => 10401
        ],
        [
            "name" => "Posta de Salud Rural Chana",
            "code" => "124533",
            "comuna_id" => 10401
        ],
        [
            "name" => "Posta de Salud Rural Puerto Ramírez",
            "code" => "124534",
            "comuna_id" => 10404
        ],
        [
            "name" => "Posta de Salud Rural El Azul",
            "code" => "124535",
            "comuna_id" => 10402
        ],
        [
            "name" => "Posta de Salud Rural El Malito",
            "code" => "124536",
            "comuna_id" => 10404
        ],
        [
            "name" => "Posta de Salud Rural Chope",
            "code" => "124537",
            "comuna_id" => 10102
        ],
        [
            "name" => "Posta de Salud Rural Pocoihuén",
            "code" => "124539",
            "comuna_id" => 10103
        ],
        [
            "name" => "Posta de Salud Rural El Espolón",
            "code" => "124540",
            "comuna_id" => 10402
        ],
        [
            "name" => "Posta de Salud Rural Huelmo",
            "code" => "124541",
            "comuna_id" => 10101
        ],
        [
            "name" => "Posta de Salud Rural Valle El Frío",
            "code" => "124543",
            "comuna_id" => 10103
        ],
        [
            "name" => "Posta de Salud Rural Piedra Azul",
            "code" => "124544",
            "comuna_id" => 10101
        ],
        [
            "name" => "Posta de Salud Rural Estaquilla",
            "code" => "124545",
            "comuna_id" => 10106
        ],
        [
            "name" => "Posta de Salud Rural Hueque",
            "code" => "124548",
            "comuna_id" => 10401
        ],
        [
            "name" => "Posta de Salud Rural Macal",
            "code" => "124549",
            "comuna_id" => 10107
        ],
        [
            "name" => "Posta de Salud Rural Casa de Pesca",
            "code" => "124550",
            "comuna_id" => 10401
        ],
        [
            "name" => "Posta de Salud Rural Machil",
            "code" => "124551",
            "comuna_id" => 10102
        ],
        [
            "name" => "Posta de Salud Rural Queullín",
            "code" => "124552",
            "comuna_id" => 10102
        ],
        [
            "name" => "Posta de Salud Rural San Ramón (Calbuco)",
            "code" => "124553",
            "comuna_id" => 10102
        ],
        [
            "name" => "Posta de Salud Rural Huayún",
            "code" => "124554",
            "comuna_id" => 10102
        ],
        [
            "name" => "Posta de Salud Rural Llaguepe",
            "code" => "124555",
            "comuna_id" => 10103
        ],
        [
            "name" => "COSAM Puerto Montt",
            "code" => "124601",
            "comuna_id" => 10101
        ],
        [
            "name" => "COSAM de Reloncaví",
            "code" => "124602",
            "comuna_id" => 10101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Anahuac",
            "code" => "124705",
            "comuna_id" => 10101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Licarayen",
            "code" => "124710",
            "comuna_id" => 10101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Chamiza",
            "code" => "124715",
            "comuna_id" => 10101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar de Ayacara",
            "code" => "124731",
            "comuna_id" => 10401
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Pantanosa",
            "code" => "124765",
            "comuna_id" => 10105
        ],
        [
            "name" => "SAPU-Angelmó",
            "code" => "124805",
            "comuna_id" => 10101
        ],
        [
            "name" => "SAPU-Antonio Varas",
            "code" => "124806",
            "comuna_id" => 10101
        ],
        [
            "name" => "SAPU-Puerto Varas",
            "code" => "124810",
            "comuna_id" => 10109
        ],
        [
            "name" => "SAPU-Padre Hurtado",
            "code" => "124881",
            "comuna_id" => 10101
        ],
        [
            "name" => "SAPU-Alerce",
            "code" => "124895",
            "comuna_id" => 10101
        ],
        [
            "name" => "Actividades gestionadas por la Dirección del Servicio para apoyo de la Red (S.S de Aysén)",
            "code" => "125010",
            "comuna_id" => 11101
        ],
        [
            "name" => "PRAIS (S.S Aisén)",
            "code" => "125011",
            "comuna_id" => 11101
        ],
        [
            "name" => "Clínica Dental Móvil Simple. Pat. PW4067 (Coihaique)",
            "code" => "125012",
            "comuna_id" => 11101
        ],
        [
            "name" => "Hospital Regional (Coihaique)",
            "code" => "125100",
            "comuna_id" => 11101
        ],
        [
            "name" => "Hospital de Puerto Aisén",
            "code" => "125101",
            "comuna_id" => 11201
        ],
        [
            "name" => "Hospital Dr. Leopoldo Ortega R. (Chile Chico)",
            "code" => "125102",
            "comuna_id" => 11401
        ],
        [
            "name" => "Hospital Lord Cochrane",
            "code" => "125103",
            "comuna_id" => 11301
        ],
        [
            "name" => "Hospital Dr. Jorge Ibar (Cisnes)",
            "code" => "125104",
            "comuna_id" => 11202
        ],
        [
            "name" => "Centro de Salud Mutual CChC Coyhaique",
            "code" => "125200",
            "comuna_id" => 11101
        ],
        [
            "name" => "Policlínico del Trabajador  Coyhaique",
            "code" => "125201",
            "comuna_id" => 11101
        ],
        [
            "name" => "Centro de Salud Mutual CChC Puerto Aysén",
            "code" => "125203",
            "comuna_id" => 11201
        ],
        [
            "name" => "Clínica de Trabajador AChS",
            "code" => "125204",
            "comuna_id" => 11201
        ],
        [
            "name" => "Centro Clínico Militar Coyhaique",
            "code" => "125205",
            "comuna_id" => 11101
        ],
        [
            "name" => "Vacunatorio Dra. Elizabeth Otazo",
            "code" => "125206",
            "comuna_id" => 11101
        ],
        [
            "name" => "Centro Médico Dental XI Zona Aysén del General Carlos Ibáñez del Campo",
            "code" => "125207",
            "comuna_id" => 11101
        ],
        [
            "name" => "Consultorio Víctor Domingo Silva",
            "code" => "125300",
            "comuna_id" => 11101
        ],
        [
            "name" => "Consultorio Alejandro Gutiérrez",
            "code" => "125301",
            "comuna_id" => 11101
        ],
        [
            "name" => "Posta de Salud Rural Balmaceda",
            "code" => "125400",
            "comuna_id" => 11101
        ],
        [
            "name" => "Posta de Salud Rural Melinka",
            "code" => "125401",
            "comuna_id" => 11203
        ],
        [
            "name" => "Posta de Salud Rural Puerto Aguirre",
            "code" => "125402",
            "comuna_id" => 11201
        ],
        [
            "name" => "Posta de Salud Rural Caleta Andrade",
            "code" => "125403",
            "comuna_id" => 11201
        ],
        [
            "name" => "Posta de Salud Rural Lago Verde",
            "code" => "125404",
            "comuna_id" => 11102
        ],
        [
            "name" => "Posta de Salud Rural La Tapera",
            "code" => "125405",
            "comuna_id" => 11102
        ],
        [
            "name" => "Posta de Salud Rural Villa Amengual",
            "code" => "125406",
            "comuna_id" => 11102
        ],
        [
            "name" => "Posta de Salud Rural Bahía Murta",
            "code" => "125407",
            "comuna_id" => 11402
        ],
        [
            "name" => "Posta de Salud Rural Puerto Sánchez",
            "code" => "125408",
            "comuna_id" => 11402
        ],
        [
            "name" => "Posta de Salud Rural Puerto Bertrand",
            "code" => "125409",
            "comuna_id" => 11401
        ],
        [
            "name" => "Posta de Salud Rural Puerto Guadal",
            "code" => "125410",
            "comuna_id" => 11401
        ],
        [
            "name" => "Posta de Salud Rural Mallín Grande",
            "code" => "125411",
            "comuna_id" => 11401
        ],
        [
            "name" => "Posta de Salud Rural Río Tranquilo",
            "code" => "125412",
            "comuna_id" => 11402
        ],
        [
            "name" => "Posta de Salud Rural El Blanco",
            "code" => "125413",
            "comuna_id" => 11101
        ],
        [
            "name" => "Posta de Salud Rural Valle Simpson",
            "code" => "125414",
            "comuna_id" => 11101
        ],
        [
            "name" => "Posta de Salud Rural Villa Ortega",
            "code" => "125415",
            "comuna_id" => 11101
        ],
        [
            "name" => "Posta de Salud Rural Ñireguao",
            "code" => "125416",
            "comuna_id" => 11101
        ],
        [
            "name" => "Posta de Salud Rural Chacabuco (Aisén)",
            "code" => "125417",
            "comuna_id" => 11201
        ],
        [
            "name" => "Posta de Salud Rural Villa Mañihuales",
            "code" => "125418",
            "comuna_id" => 11201
        ],
        [
            "name" => "Posta de Salud Rural Puerto Ibáñez",
            "code" => "125419",
            "comuna_id" => 11402
        ],
        [
            "name" => "Posta de Salud Rural Cerro Castillo (Río Ibáñez)",
            "code" => "125420",
            "comuna_id" => 11402
        ],
        [
            "name" => "Posta de Salud Rural Puyuhuapi",
            "code" => "125421",
            "comuna_id" => 11202
        ],
        [
            "name" => "Posta de Salud Rural Lago Atravesado",
            "code" => "125423",
            "comuna_id" => 11101
        ],
        [
            "name" => "Posta de Salud Rural Raúl Marín Balmaceda",
            "code" => "125424",
            "comuna_id" => 11202
        ],
        [
            "name" => "Posta de Salud Rural Villa O'Higgins",
            "code" => "125425",
            "comuna_id" => 11302
        ],
        [
            "name" => "Posta de Salud Rural El Gato",
            "code" => "125426",
            "comuna_id" => 11101
        ],
        [
            "name" => "Posta de Salud Rural Melimoyu",
            "code" => "125427",
            "comuna_id" => 11202
        ],
        [
            "name" => "Posta de Salud Rural Caleta Tortel",
            "code" => "125428",
            "comuna_id" => 11303
        ],
        [
            "name" => "Posta de Salud Rural Isla Toto",
            "code" => "125429",
            "comuna_id" => 11202
        ],
        [
            "name" => "Posta de Salud Rural Las Juntas",
            "code" => "125442",
            "comuna_id" => 11202
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Ribera Sur",
            "code" => "125701",
            "comuna_id" => 11201
        ],
        [
            "name" => "Actividades gestionadas por la Dirección del Servicio para apoyo de la Red (S.S de Magallanes)",
            "code" => "126010",
            "comuna_id" => 12101
        ],
        [
            "name" => "PRAIS (S.S Magallanes)",
            "code" => "126011",
            "comuna_id" => 12101
        ],
        [
            "name" => "Oficina Sanitaria Dorotea",
            "code" => "126090",
            "comuna_id" => 12401
        ],
        [
            "name" => "Vacunatorio SEREMI de Salud Magallanes",
            "code" => "126095",
            "comuna_id" => 12101
        ],
        [
            "name" => "Hospital Clínico de Magallanes Dr. Lautaro Navarro Avaria",
            "code" => "126100",
            "comuna_id" => 12101
        ],
        [
            "name" => "Hospital Dr. Augusto Essmann Burgos ( Natales)",
            "code" => "126101",
            "comuna_id" => 12401
        ],
        [
            "name" => "Hospital Dr. Marco Antonio Chamorro ( Porvenir)",
            "code" => "126102",
            "comuna_id" => 12301
        ],
        [
            "name" => "Hospital FFAA Cirujano Guzmán",
            "code" => "126200",
            "comuna_id" => 12101
        ],
        [
            "name" => "Clínica Magallanes",
            "code" => "126201",
            "comuna_id" => 12101
        ],
        [
            "name" => "Centro de Atención Instituto de Seguridad del Trabajador Punta Arenas",
            "code" => "126202",
            "comuna_id" => 12101
        ],
        [
            "name" => "Centro de Salud Mutual CChC Punta Arenas",
            "code" => "126203",
            "comuna_id" => 12101
        ],
        [
            "name" => "Hospital Naval (Puerto Williams) (D)",
            "code" => "126204",
            "comuna_id" => 12201
        ],
        [
            "name" => "Centro Médico Medvital",
            "code" => "126211",
            "comuna_id" => 12101
        ],
        [
            "name" => "Clínica de Recuperación Hogar de Cristo Juan Pablo II",
            "code" => "126212",
            "comuna_id" => 12101
        ],
        [
            "name" => "Instituto Médico Sarmiento",
            "code" => "126213",
            "comuna_id" => 12101
        ],
        [
            "name" => "Centro Médico y Dental Megasalud S.A Punta Arenas",
            "code" => "126214",
            "comuna_id" => 12101
        ],
        [
            "name" => "Clínica Sombrero",
            "code" => "126215",
            "comuna_id" => 12302
        ],
        [
            "name" => "Clínica Harris",
            "code" => "126216",
            "comuna_id" => 12201
        ],
        [
            "name" => "Centro Médico Dental La Araucana S.A",
            "code" => "126217",
            "comuna_id" => 12101
        ],
        [
            "name" => "Centro de Rehabilitación Club de Leones Cruz del Sur",
            "code" => "126219",
            "comuna_id" => 12101
        ],
        [
            "name" => "Policlínico AChS (Punta Arenas)",
            "code" => "126220",
            "comuna_id" => 12101
        ],
        [
            "name" => "Vacunatorio Centro Médico Colón",
            "code" => "126221",
            "comuna_id" => 12101
        ],
        [
            "name" => "Policlínico de la Fuerzas Armadas y de Orden",
            "code" => "126222",
            "comuna_id" => 12101
        ],
        [
            "name" => "Vacunatorio Alfamed",
            "code" => "126223",
            "comuna_id" => 12101
        ],
        [
            "name" => "Clínica Croacia",
            "code" => "126225",
            "comuna_id" => 12101
        ],
        [
            "name" => "Servicio Dental 3ra. Comisaría de Carabineros de Porvenir (Consultorio tipo 2)",
            "code" => "126226",
            "comuna_id" => 12301
        ],
        [
            "name" => "Central Odontológica de Magallanes de 3era Zona Naval",
            "code" => "126227",
            "comuna_id" => 12101
        ],
        [
            "name" => "Laboratorio Clínico Corporación Municipal Punta Arenas",
            "code" => "126228",
            "comuna_id" => 12101
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Mateo Bencur",
            "code" => "126300",
            "comuna_id" => 12101
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Juan Damianovic",
            "code" => "126301",
            "comuna_id" => 12101
        ],
        [
            "name" => "Centro de Salud Familiar 18 Septiembre",
            "code" => "126302",
            "comuna_id" => 12101
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Thomas Fenton",
            "code" => "126303",
            "comuna_id" => 12101
        ],
        [
            "name" => "Centro de Salud Familiar Carlos Ibáñez",
            "code" => "126304",
            "comuna_id" => 12101
        ],
        [
            "name" => "Centro de Salud Familiar Natales",
            "code" => "126305",
            "comuna_id" => 12401
        ],
        [
            "name" => "Posta de Salud Rural Cerro Castillo (Torres del Paine)",
            "code" => "126400",
            "comuna_id" => 12402
        ],
        [
            "name" => "Posta de Salud Rural Río Verde",
            "code" => "126402",
            "comuna_id" => 12103
        ],
        [
            "name" => "Posta de Salud Rural Tehuelches",
            "code" => "126403",
            "comuna_id" => 12102
        ],
        [
            "name" => "Posta de Salud Rural Punta Delgada",
            "code" => "126404",
            "comuna_id" => 12104
        ],
        [
            "name" => "Posta de Salud Rural Puerto Edén",
            "code" => "126410",
            "comuna_id" => 12401
        ],
        [
            "name" => "Posta de Salud Rural Cameron",
            "code" => "126412",
            "comuna_id" => 12303
        ],
        [
            "name" => "Posta de Salud Rural Dorotea",
            "code" => "126413",
            "comuna_id" => 12401
        ],
        [
            "name" => "Posta de Salud Rural Agua Fresca",
            "code" => "126414",
            "comuna_id" => 12101
        ],
        [
            "name" => "COSAM Punta Arenas",
            "code" => "126606",
            "comuna_id" => 12101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Dr. Mateo Bencur",
            "code" => "126700",
            "comuna_id" => 12101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Río Seco",
            "code" => "126701",
            "comuna_id" => 12101
        ],
        [
            "name" => "Hospital Comunitario Cristina Calderón de Puerto Williams",
            "code" => "126704",
            "comuna_id" => 12201
        ],
        [
            "name" => "SAPU-Dr. Mateo Bencur",
            "code" => "126800",
            "comuna_id" => 12101
        ],
        [
            "name" => "SAPU-Dr. Juan Damianovic",
            "code" => "126801",
            "comuna_id" => 12101
        ],
        [
            "name" => "Actividades gestionadas por la Dirección del Servicio para apoyo de la Red (S.S de Arauco)",
            "code" => "128010",
            "comuna_id" => 8201
        ],
        [
            "name" => "PRAIS (S.S Arauco)",
            "code" => "128011",
            "comuna_id" => 8201
        ],
        [
            "name" => "Clínica Dental Móvil Triple. Pat. VP5666 (Lebu)",
            "code" => "128012",
            "comuna_id" => 8201
        ],
        [
            "name" => "Clínica Dental Móvil Simple. Pat. VP5664 (Lebu)",
            "code" => "128013",
            "comuna_id" => 8201
        ],
        [
            "name" => "Clínica Dental Móvil Simple. Pat. DDKB17 (Lebu)",
            "code" => "128014",
            "comuna_id" => 8201
        ],
        [
            "name" => "Hospital de Campaña (Curanilahue)",
            "code" => "128050",
            "comuna_id" => 8205
        ],
        [
            "name" => "Hospital Provincial Dr. Rafael Avaría (Curanilahue)",
            "code" => "128109",
            "comuna_id" => 8205
        ],
        [
            "name" => "Hospital de Lebu",
            "code" => "128110",
            "comuna_id" => 8201
        ],
        [
            "name" => "Hospital Intercultural Kallvu Llanka (Cañete)",
            "code" => "128111",
            "comuna_id" => 8203
        ],
        [
            "name" => "Hospital de Contulmo",
            "code" => "128112",
            "comuna_id" => 8204
        ],
        [
            "name" => "Hospital San Vicente (Arauco)",
            "code" => "128113",
            "comuna_id" => 8202
        ],
        [
            "name" => "Laboratorio  Clínico San Pedro",
            "code" => "128200",
            "comuna_id" => 8205
        ],
        [
            "name" => "Laboratorio Clínico Bio-Test",
            "code" => "128217",
            "comuna_id" => 8203
        ],
        [
            "name" => "Laboratorio Clínico San Pedro",
            "code" => "128218",
            "comuna_id" => 8203
        ],
        [
            "name" => "Centro de Salud Familiar Lebu Norte",
            "code" => "128311",
            "comuna_id" => 8201
        ],
        [
            "name" => "Centro de Salud Familiar Isabel Jiménez",
            "code" => "128324",
            "comuna_id" => 8207
        ],
        [
            "name" => "Centro de Salud Familiar Eleuterio Ramírez",
            "code" => "128327",
            "comuna_id" => 8205
        ],
        [
            "name" => "Centro de Salud Familiar Los Álamos",
            "code" => "128328",
            "comuna_id" => 8206
        ],
        [
            "name" => "Posta de Salud Rural Cerro Alto",
            "code" => "128405",
            "comuna_id" => 8206
        ],
        [
            "name" => "Posta de Salud Rural Pehuén",
            "code" => "128406",
            "comuna_id" => 8201
        ],
        [
            "name" => "Posta de Salud Rural Tres Pinos",
            "code" => "128407",
            "comuna_id" => 8206
        ],
        [
            "name" => "Posta de Salud Rural Pangue",
            "code" => "128408",
            "comuna_id" => 8206
        ],
        [
            "name" => "Posta de Salud Rural Quiapo",
            "code" => "128409",
            "comuna_id" => 8202
        ],
        [
            "name" => "Posta de Salud Rural Isla Mocha",
            "code" => "128410",
            "comuna_id" => 8201
        ],
        [
            "name" => "Posta de Salud Rural Tubul",
            "code" => "128411",
            "comuna_id" => 8202
        ],
        [
            "name" => "Posta de Salud Rural Ramadillas",
            "code" => "128412",
            "comuna_id" => 8202
        ],
        [
            "name" => "Posta de Salud Rural Punta Lavapié",
            "code" => "128413",
            "comuna_id" => 8202
        ],
        [
            "name" => "Centro de Salud Familiar Laraquete",
            "code" => "128414",
            "comuna_id" => 8202
        ],
        [
            "name" => "Posta de Salud Rural Cayucupil",
            "code" => "128415",
            "comuna_id" => 8203
        ],
        [
            "name" => "Posta de Salud Rural Antiquina",
            "code" => "128416",
            "comuna_id" => 8203
        ],
        [
            "name" => "Posta de Salud Rural Antihuala",
            "code" => "128417",
            "comuna_id" => 8206
        ],
        [
            "name" => "Posta de Salud Rural Huentelolén",
            "code" => "128418",
            "comuna_id" => 8203
        ],
        [
            "name" => "Posta de Salud Rural Quidico",
            "code" => "128419",
            "comuna_id" => 8207
        ],
        [
            "name" => "Posta de Salud Rural Ranquilhue",
            "code" => "128420",
            "comuna_id" => 8207
        ],
        [
            "name" => "Posta de Salud Rural Alto Quilantahue",
            "code" => "128421",
            "comuna_id" => 8207
        ],
        [
            "name" => "Posta de Salud Rural Casa de Piedra",
            "code" => "128422",
            "comuna_id" => 8207
        ],
        [
            "name" => "Posta de Salud Rural Llenquehue",
            "code" => "128423",
            "comuna_id" => 8203
        ],
        [
            "name" => "Posta de Salud Rural Lloncao",
            "code" => "128424",
            "comuna_id" => 8203
        ],
        [
            "name" => "Posta de Salud Rural Pocuno",
            "code" => "128425",
            "comuna_id" => 8203
        ],
        [
            "name" => "Posta de Salud Rural Elicura",
            "code" => "128426",
            "comuna_id" => 8204
        ],
        [
            "name" => "Posta de Salud Rural Mahuilque Bajo",
            "code" => "128427",
            "comuna_id" => 8204
        ],
        [
            "name" => "Posta de Salud Rural Los Huapes de Aillahuampi",
            "code" => "128428",
            "comuna_id" => 8204
        ],
        [
            "name" => "Posta de Salud Rural Huillinco",
            "code" => "128429",
            "comuna_id" => 8204
        ],
        [
            "name" => "Centro de Salud Familiar Carampangue",
            "code" => "128438",
            "comuna_id" => 8202
        ],
        [
            "name" => "Posta de Salud Rural Las Puentes",
            "code" => "128440",
            "comuna_id" => 8202
        ],
        [
            "name" => "Posta de Salud Rural Yani",
            "code" => "128441",
            "comuna_id" => 8202
        ],
        [
            "name" => "Posta de Salud Rural San José de Colico",
            "code" => "128442",
            "comuna_id" => 8205
        ],
        [
            "name" => "Posta de Salud Rural Santa Rosa (Lebu)",
            "code" => "128443",
            "comuna_id" => 8201
        ],
        [
            "name" => "Posta de Salud Rural Llico (Arauco)",
            "code" => "128444",
            "comuna_id" => 8202
        ],
        [
            "name" => "Posta de Salud Rural Ranquilco",
            "code" => "128445",
            "comuna_id" => 8206
        ],
        [
            "name" => "Posta de Salud Rural Pangueco (Cañete)",
            "code" => "128446",
            "comuna_id" => 8203
        ],
        [
            "name" => "Posta de Salud Rural Primer Agua",
            "code" => "128447",
            "comuna_id" => 8207
        ],
        [
            "name" => "Posta de Salud Rural Loncotripai",
            "code" => "128448",
            "comuna_id" => 8207
        ],
        [
            "name" => "COSAM Curanilahue",
            "code" => "128609",
            "comuna_id" => 8205
        ],
        [
            "name" => "COSAM Lebu",
            "code" => "128610",
            "comuna_id" => 8201
        ],
        [
            "name" => "COSAM Cañete",
            "code" => "128611",
            "comuna_id" => 8203
        ],
        [
            "name" => "COSAM de Arauco",
            "code" => "128613",
            "comuna_id" => 8202
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Los Álamos",
            "code" => "128728",
            "comuna_id" => 8206
        ],
        [
            "name" => "Consultorio Tubul",
            "code" => "128729",
            "comuna_id" => 8202
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Quidico",
            "code" => "128730",
            "comuna_id" => 8207
        ],
        [
            "name" => "Actividades gestionadas por la Dirección del Servicio para apoyo de la Red (S.S Araucanía Norte)",
            "code" => "129010",
            "comuna_id" => 9201
        ],
        [
            "name" => "PRAIS (S.S Araucanía Norte)",
            "code" => "129011",
            "comuna_id" => 9201
        ],
        [
            "name" => "Clínica Dental Móvil Triple. Pat. BBTD27 (Angol)",
            "code" => "129012",
            "comuna_id" => 9201
        ],
        [
            "name" => "Clínica Dental Móvil Triple. Pat. BBTD28 (Angol)",
            "code" => "129013",
            "comuna_id" => 9201
        ],
        [
            "name" => "Hospital de Campaña Estados Unidos (Angol)",
            "code" => "129050",
            "comuna_id" => 9201
        ],
        [
            "name" => "Hospital de Campaña Nº 2 (Servicio de Salud)",
            "code" => "129051",
            "comuna_id" => 9201
        ],
        [
            "name" => "Hospital de Campaña Nº 3 (Servicio de Salud)",
            "code" => "129052",
            "comuna_id" => 9201
        ],
        [
            "name" => "Hospital Dr. Mauricio Heyermann (Angol)",
            "code" => "129100",
            "comuna_id" => 9201
        ],
        [
            "name" => "Hospital de Purén",
            "code" => "129101",
            "comuna_id" => 9208
        ],
        [
            "name" => "Consultorio Los Sauces",
            "code" => "129102",
            "comuna_id" => 9206
        ],
        [
            "name" => "Hospital de Collipulli",
            "code" => "129103",
            "comuna_id" => 9202
        ],
        [
            "name" => "Hospital Dr. Dino Stagno M.(Traiguén)",
            "code" => "129104",
            "comuna_id" => 9210
        ],
        [
            "name" => "Consultorio Lumaco",
            "code" => "129105",
            "comuna_id" => 9207
        ],
        [
            "name" => "Hospital San José (Victoria)",
            "code" => "129106",
            "comuna_id" => 9211
        ],
        [
            "name" => "Hospital Dr. Oscar Hernández E.(Curacautín)",
            "code" => "129107",
            "comuna_id" => 9203
        ],
        [
            "name" => "Hospital de Lonquimay",
            "code" => "129108",
            "comuna_id" => 9205
        ],
        [
            "name" => "Clínica de la Asociación Chilena de Seguridad AChS Angol",
            "code" => "129233",
            "comuna_id" => 9201
        ],
        [
            "name" => "Centro de Salud Gendarmería de Chile Angol",
            "code" => "129234",
            "comuna_id" => 9201
        ],
        [
            "name" => "Laboratorio Biomec",
            "code" => "129235",
            "comuna_id" => 9201
        ],
        [
            "name" => "Laboratorio Clínico Angol",
            "code" => "129236",
            "comuna_id" => 9201
        ],
        [
            "name" => "Vacunatorio Myrta Aravena Fuentes",
            "code" => "129237",
            "comuna_id" => 9201
        ],
        [
            "name" => "Consultorio Prefectura de Carabineros de Chile Malleco",
            "code" => "129238",
            "comuna_id" => 9201
        ],
        [
            "name" => "Centro de Salud Familiar Renaico",
            "code" => "129300",
            "comuna_id" => 9209
        ],
        [
            "name" => "Centro de Salud Familiar Huequén",
            "code" => "129301",
            "comuna_id" => 9201
        ],
        [
            "name" => "Consultorio Ercilla",
            "code" => "129302",
            "comuna_id" => 9204
        ],
        [
            "name" => "Centro de Salud Familiar Alemania de Angol",
            "code" => "129303",
            "comuna_id" => 9201
        ],
        [
            "name" => "Centro de Salud Familiar Piedra de Águila",
            "code" => "129304",
            "comuna_id" => 9201
        ],
        [
            "name" => "Centro de Salud Familiar Victoria",
            "code" => "129318",
            "comuna_id" => 9211
        ],
        [
            "name" => "Posta de Salud Rural Vegas Blancas",
            "code" => "129400",
            "comuna_id" => 9201
        ],
        [
            "name" => "Posta de Salud Rural Coyanco",
            "code" => "129401",
            "comuna_id" => 9201
        ],
        [
            "name" => "Posta de Salud Rural Colonia Manuel Rodríguez",
            "code" => "129403",
            "comuna_id" => 9201
        ],
        [
            "name" => "Posta de Salud Rural Cuartel Quemado",
            "code" => "129404",
            "comuna_id" => 9208
        ],
        [
            "name" => "Posta de Salud Rural Coyancahuín",
            "code" => "129405",
            "comuna_id" => 9208
        ],
        [
            "name" => "Posta de Salud Rural El Lingue",
            "code" => "129406",
            "comuna_id" => 9208
        ],
        [
            "name" => "Posta de Salud Rural San Ramón de Los Sauces",
            "code" => "129407",
            "comuna_id" => 9206
        ],
        [
            "name" => "Posta de Salud Rural Trintre",
            "code" => "129408",
            "comuna_id" => 9206
        ],
        [
            "name" => "Posta de Salud Rural Tijeral",
            "code" => "129409",
            "comuna_id" => 9209
        ],
        [
            "name" => "Posta de Salud Rural Maica",
            "code" => "129410",
            "comuna_id" => 9202
        ],
        [
            "name" => "Posta de Salud Rural Mininco",
            "code" => "129411",
            "comuna_id" => 9202
        ],
        [
            "name" => "Posta de Salud Rural La Batalla",
            "code" => "129412",
            "comuna_id" => 9202
        ],
        [
            "name" => "Posta de Salud Rural Amargo",
            "code" => "129413",
            "comuna_id" => 9202
        ],
        [
            "name" => "Posta de Salud Rural Niblinto",
            "code" => "129414",
            "comuna_id" => 9202
        ],
        [
            "name" => "Posta de Salud Rural Chequenco",
            "code" => "129415",
            "comuna_id" => 9204
        ],
        [
            "name" => "Posta de Salud Rural Aniñir",
            "code" => "129416",
            "comuna_id" => 9210
        ],
        [
            "name" => "Posta de Salud Rural Molco",
            "code" => "129417",
            "comuna_id" => 9210
        ],
        [
            "name" => "Posta de Salud Rural Quechereguas",
            "code" => "129418",
            "comuna_id" => 9210
        ],
        [
            "name" => "Posta de Salud Rural Santa Rosa (Los Sauces )",
            "code" => "129419",
            "comuna_id" => 9206
        ],
        [
            "name" => "Posta de Salud Rural Temulemu",
            "code" => "129420",
            "comuna_id" => 9210
        ],
        [
            "name" => "Posta de Salud Rural Quilquén",
            "code" => "129421",
            "comuna_id" => 9210
        ],
        [
            "name" => "Posta de Salud Rural Pichipellahuén",
            "code" => "129423",
            "comuna_id" => 9207
        ],
        [
            "name" => "Posta de Salud Rural Curilebu",
            "code" => "129424",
            "comuna_id" => 9207
        ],
        [
            "name" => "Posta de Salud Rural Manzanar ( Lumaco )",
            "code" => "129425",
            "comuna_id" => 9207
        ],
        [
            "name" => "Posta de Salud Rural Chanco",
            "code" => "129426",
            "comuna_id" => 9207
        ],
        [
            "name" => "Posta de Salud Rural La Herradura",
            "code" => "129427",
            "comuna_id" => 9207
        ],
        [
            "name" => "Posta de Salud Rural Loncoyán",
            "code" => "129428",
            "comuna_id" => 9208
        ],
        [
            "name" => "Posta de Salud Rural Selva Oscura",
            "code" => "129429",
            "comuna_id" => 9211
        ],
        [
            "name" => "Posta de Salud Rural Púa",
            "code" => "129430",
            "comuna_id" => 9211
        ],
        [
            "name" => "Posta de Salud Rural Quino",
            "code" => "129431",
            "comuna_id" => 9211
        ],
        [
            "name" => "Posta de Salud Rural Pailahueque",
            "code" => "129432",
            "comuna_id" => 9204
        ],
        [
            "name" => "Posta de Salud Rural Rosario",
            "code" => "129433",
            "comuna_id" => 9211
        ],
        [
            "name" => "Posta de Salud Rural Cullinco",
            "code" => "129434",
            "comuna_id" => 9211
        ],
        [
            "name" => "Posta de Salud Rural California",
            "code" => "129435",
            "comuna_id" => 9211
        ],
        [
            "name" => "Posta de Salud Rural Reducción Pailahueque",
            "code" => "129436",
            "comuna_id" => 9211
        ],
        [
            "name" => "Posta de Salud Rural Huitranlebu",
            "code" => "129437",
            "comuna_id" => 9208
        ],
        [
            "name" => "Posta de Salud Rural Chacaico",
            "code" => "129438",
            "comuna_id" => 9204
        ],
        [
            "name" => "Posta de Salud Rural Tricauco",
            "code" => "129439",
            "comuna_id" => 9204
        ],
        [
            "name" => "Posta de Salud Rural Temocuicui",
            "code" => "129440",
            "comuna_id" => 9204
        ],
        [
            "name" => "Posta de Salud Rural Malalcahuello",
            "code" => "129441",
            "comuna_id" => 9203
        ],
        [
            "name" => "Posta de Salud Rural Río Blanco (Curacautín)",
            "code" => "129442",
            "comuna_id" => 9203
        ],
        [
            "name" => "Posta de Salud Rural La Tepa",
            "code" => "129443",
            "comuna_id" => 9203
        ],
        [
            "name" => "Posta de Salud Rural Santa Ana",
            "code" => "129444",
            "comuna_id" => 9203
        ],
        [
            "name" => "Posta de Salud Rural Radalco",
            "code" => "129445",
            "comuna_id" => 9203
        ],
        [
            "name" => "Posta de Salud Rural Rariruca",
            "code" => "129446",
            "comuna_id" => 9203
        ],
        [
            "name" => "Posta de Salud Rural Manzanar ( Curacautín )",
            "code" => "129447",
            "comuna_id" => 9203
        ],
        [
            "name" => "Posta de Salud Rural Contraco",
            "code" => "129448",
            "comuna_id" => 9205
        ],
        [
            "name" => "Posta de Salud Rural Lolén",
            "code" => "129449",
            "comuna_id" => 9205
        ],
        [
            "name" => "Posta de Salud Rural Sierra Nevada",
            "code" => "129450",
            "comuna_id" => 9205
        ],
        [
            "name" => "Posta de Salud Rural Icalma",
            "code" => "129451",
            "comuna_id" => 9205
        ],
        [
            "name" => "Posta de Salud Rural Liucura (Lonquimay)",
            "code" => "129452",
            "comuna_id" => 9205
        ],
        [
            "name" => "Posta de Salud Rural Pedregoso (Lonquimay)",
            "code" => "129453",
            "comuna_id" => 9205
        ],
        [
            "name" => "Posta de Salud Rural Pichipehuenco",
            "code" => "129454",
            "comuna_id" => 9205
        ],
        [
            "name" => "Posta de Salud Rural Troyo",
            "code" => "129455",
            "comuna_id" => 9205
        ],
        [
            "name" => "Posta de Salud Rural Ranquil",
            "code" => "129456",
            "comuna_id" => 9205
        ],
        [
            "name" => "Posta de Salud Rural Pivadenco",
            "code" => "129585",
            "comuna_id" => 9206
        ],
        [
            "name" => "Posta de Salud Rural Didaico",
            "code" => "129586",
            "comuna_id" => 9210
        ],
        [
            "name" => "Posta de Salud Rural Encinar",
            "code" => "129587",
            "comuna_id" => 9202
        ],
        [
            "name" => "Posta de Salud Rural Santa Julia",
            "code" => "129588",
            "comuna_id" => 9203
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Consultorio Alemania de Angol",
            "code" => "129703",
            "comuna_id" => 9201
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Capitán Pastene",
            "code" => "129705",
            "comuna_id" => 9207
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Cons. Victoria",
            "code" => "129718",
            "comuna_id" => 9211
        ],
        [
            "name" => "SAPU-Alemania de Angol",
            "code" => "129803",
            "comuna_id" => 9201
        ],
        [
            "name" => "Actividades gestionadas por la Dirección del Servicio para apoyo de la Red (S.S de Chiloé)",
            "code" => "133010",
            "comuna_id" => 10201
        ],
        [
            "name" => "PRAIS (S.S Chiloé)",
            "code" => "133011",
            "comuna_id" => 10201
        ],
        [
            "name" => "Clínica Dental Móvil Triple. Pat. BKYS90 (Castro)",
            "code" => "133012",
            "comuna_id" => 10201
        ],
        [
            "name" => "Hospital de Castro",
            "code" => "133150",
            "comuna_id" => 10201
        ],
        [
            "name" => "Hospital de Ancud",
            "code" => "133155",
            "comuna_id" => 10202
        ],
        [
            "name" => "Hospital Comunitario de Achao",
            "code" => "133160",
            "comuna_id" => 10210
        ],
        [
            "name" => "Hospital de Quellón",
            "code" => "133165",
            "comuna_id" => 10208
        ],
        [
            "name" => "Hospital de Queilén",
            "code" => "133170",
            "comuna_id" => 10207
        ],
        [
            "name" => "Buque Cirujano Videla",
            "code" => "133175",
            "comuna_id" => 10201
        ],
        [
            "name" => "Vacunatorio Rosalía Muñoz",
            "code" => "133200",
            "comuna_id" => 10202
        ],
        [
            "name" => "Centro Médico Austral",
            "code" => "133201",
            "comuna_id" => 10201
        ],
        [
            "name" => "Clínica de la AChS Castro",
            "code" => "133202",
            "comuna_id" => 10201
        ],
        [
            "name" => "Policlínico de la AChS Quellón",
            "code" => "133203",
            "comuna_id" => 10208
        ],
        [
            "name" => "Policlínico de la AChS Ancud",
            "code" => "133204",
            "comuna_id" => 10202
        ],
        [
            "name" => "Laboratorio Clínico y Hematológico Ancud",
            "code" => "133205",
            "comuna_id" => 10202
        ],
        [
            "name" => "Laboratorio Biolab Ltda",
            "code" => "133206",
            "comuna_id" => 10208
        ],
        [
            "name" => "Policlínico de la AChS Castro",
            "code" => "133278",
            "comuna_id" => 10201
        ],
        [
            "name" => "Centro Médico y Dental La Araucana Castro",
            "code" => "133279",
            "comuna_id" => 10201
        ],
        [
            "name" => "Centro Médico y Dental La Araucana Ancud",
            "code" => "133280",
            "comuna_id" => 10201
        ],
        [
            "name" => "Policlínico del Instituto de Seguridad del Trabajo Ancud",
            "code" => "133281",
            "comuna_id" => 10201
        ],
        [
            "name" => "Policlínico del Instituto de Seguridad del Trabajo Castro",
            "code" => "133282",
            "comuna_id" => 10201
        ],
        [
            "name" => "Laboratorio Clínico y Hematológico Biolab",
            "code" => "133283",
            "comuna_id" => 10201
        ],
        [
            "name" => "Laboratorio Clínico Austral",
            "code" => "133284",
            "comuna_id" => 10201
        ],
        [
            "name" => "Laboratorio Clínico y Hematológico Biolab Ltda. ECOSUR",
            "code" => "133285",
            "comuna_id" => 10201
        ],
        [
            "name" => "Laboratorio Clínico Chiloé",
            "code" => "133286",
            "comuna_id" => 10201
        ],
        [
            "name" => "Centro de Salud Familiar Pudeto Bajo",
            "code" => "133325",
            "comuna_id" => 10202
        ],
        [
            "name" => "Centro de Salud Familiar Quemchi",
            "code" => "133340",
            "comuna_id" => 10209
        ],
        [
            "name" => "Centro de Salud Familiar Chonchi",
            "code" => "133345",
            "comuna_id" => 10203
        ],
        [
            "name" => "Centro de Salud Familiar Dalcahue",
            "code" => "133350",
            "comuna_id" => 10205
        ],
        [
            "name" => "Centro de Salud Familiar Puqueldón",
            "code" => "133355",
            "comuna_id" => 10206
        ],
        [
            "name" => "Centro de Salud Familiar Curaco de Vélez",
            "code" => "133360",
            "comuna_id" => 10204
        ],
        [
            "name" => "Centro de Salud Familiar Dr. René Tapia Salgado",
            "code" => "133375",
            "comuna_id" => 10201
        ],
        [
            "name" => "Centro de Salud Familiar Dr. Manuel Ferreira de Ancud",
            "code" => "133390",
            "comuna_id" => 10202
        ],
        [
            "name" => "Centro de Salud Familiar Quellón",
            "code" => "133396",
            "comuna_id" => 10208
        ],
        [
            "name" => "Posta de Salud Rural Curahue",
            "code" => "133466",
            "comuna_id" => 10201
        ],
        [
            "name" => "Posta de Salud Rural Puyán",
            "code" => "133467",
            "comuna_id" => 10201
        ],
        [
            "name" => "Posta de Salud Rural Rilán",
            "code" => "133468",
            "comuna_id" => 10201
        ],
        [
            "name" => "Posta de Salud Rural Quehui",
            "code" => "133469",
            "comuna_id" => 10201
        ],
        [
            "name" => "Posta de Salud Rural Chelín",
            "code" => "133470",
            "comuna_id" => 10201
        ],
        [
            "name" => "Posta de Salud Rural Yutuy",
            "code" => "133471",
            "comuna_id" => 10201
        ],
        [
            "name" => "Posta de Salud Rural Mocopulli",
            "code" => "133472",
            "comuna_id" => 10205
        ],
        [
            "name" => "Posta de Salud Rural Quetalco",
            "code" => "133473",
            "comuna_id" => 10205
        ],
        [
            "name" => "Posta de Salud Rural Calén",
            "code" => "133474",
            "comuna_id" => 10205
        ],
        [
            "name" => "Posta de Salud Rural Aldachildo",
            "code" => "133475",
            "comuna_id" => 10206
        ],
        [
            "name" => "Posta de Salud Rural Ichuac",
            "code" => "133476",
            "comuna_id" => 10206
        ],
        [
            "name" => "Posta de Salud Rural Detif",
            "code" => "133477",
            "comuna_id" => 10206
        ],
        [
            "name" => "Posta de Salud Rural Liucura (Puqueldón)",
            "code" => "133478",
            "comuna_id" => 10206
        ],
        [
            "name" => "Posta de Salud Rural Terao",
            "code" => "133480",
            "comuna_id" => 10203
        ],
        [
            "name" => "Posta de Salud Rural Chanquín",
            "code" => "133482",
            "comuna_id" => 10203
        ],
        [
            "name" => "Posta de Salud Rural Petanes Bajos",
            "code" => "133483",
            "comuna_id" => 10203
        ],
        [
            "name" => "Posta de Salud Rural Rauco",
            "code" => "133484",
            "comuna_id" => 10203
        ],
        [
            "name" => "Posta de Salud Rural Linao",
            "code" => "133485",
            "comuna_id" => 10202
        ],
        [
            "name" => "Posta de Salud Rural Chacao",
            "code" => "133486",
            "comuna_id" => 10202
        ],
        [
            "name" => "Posta de Salud Rural Quetalmahue",
            "code" => "133487",
            "comuna_id" => 10202
        ],
        [
            "name" => "Posta de Salud Rural Nal",
            "code" => "133488",
            "comuna_id" => 10202
        ],
        [
            "name" => "Posta de Salud Rural Manao",
            "code" => "133489",
            "comuna_id" => 10202
        ],
        [
            "name" => "Posta de Salud Rural Guabún",
            "code" => "133490",
            "comuna_id" => 10202
        ],
        [
            "name" => "Posta de Salud Rural Puntra",
            "code" => "133491",
            "comuna_id" => 10202
        ],
        [
            "name" => "Posta de Salud Rural Lliuco (Quemchi)",
            "code" => "133492",
            "comuna_id" => 10209
        ],
        [
            "name" => "Posta de Salud Rural Morrolobos",
            "code" => "133493",
            "comuna_id" => 10209
        ],
        [
            "name" => "Posta de Salud Rural Quinterquén",
            "code" => "133494",
            "comuna_id" => 10209
        ],
        [
            "name" => "Posta de Salud Rural Montemar",
            "code" => "133495",
            "comuna_id" => 10209
        ],
        [
            "name" => "Posta de Salud Rural Tenaún",
            "code" => "133496",
            "comuna_id" => 10205
        ],
        [
            "name" => "Posta de Salud Rural Quicaví",
            "code" => "133497",
            "comuna_id" => 10209
        ],
        [
            "name" => "Posta de Salud Rural Agoni Alto",
            "code" => "133498",
            "comuna_id" => 10207
        ],
        [
            "name" => "Posta de Salud Rural Alqui",
            "code" => "133499",
            "comuna_id" => 10207
        ],
        [
            "name" => "Posta de Salud Rural Apeche",
            "code" => "133500",
            "comuna_id" => 10207
        ],
        [
            "name" => "Posta de Salud Rural Pío - Pío",
            "code" => "133501",
            "comuna_id" => 10207
        ],
        [
            "name" => "Posta de Salud Rural Nepúe",
            "code" => "133502",
            "comuna_id" => 10207
        ],
        [
            "name" => "Posta de Salud Rural Quinchao",
            "code" => "133503",
            "comuna_id" => 10210
        ],
        [
            "name" => "Posta de Salud Rural Isla Lin-Lin",
            "code" => "133504",
            "comuna_id" => 10210
        ],
        [
            "name" => "Posta de Salud Rural Isla Llingua",
            "code" => "133505",
            "comuna_id" => 10210
        ],
        [
            "name" => "Posta de Salud Rural Isla Meulín",
            "code" => "133506",
            "comuna_id" => 10210
        ],
        [
            "name" => "Posta de Salud Rural Isla Quenac",
            "code" => "133507",
            "comuna_id" => 10210
        ],
        [
            "name" => "Posta de Salud Rural Isla Cahuach",
            "code" => "133509",
            "comuna_id" => 10210
        ],
        [
            "name" => "Posta de Salud Rural Isla Alao",
            "code" => "133510",
            "comuna_id" => 10210
        ],
        [
            "name" => "Posta de Salud Rural Capilla Antigüa",
            "code" => "133511",
            "comuna_id" => 10210
        ],
        [
            "name" => "Posta de Salud Rural Huyar Alto",
            "code" => "133512",
            "comuna_id" => 10204
        ],
        [
            "name" => "Posta de Salud Rural Palqui",
            "code" => "133513",
            "comuna_id" => 10204
        ],
        [
            "name" => "Posta de Salud Rural Mechuque",
            "code" => "133514",
            "comuna_id" => 10209
        ],
        [
            "name" => "Posta de Salud Rural Tac",
            "code" => "133515",
            "comuna_id" => 10209
        ],
        [
            "name" => "Posta de Salud Rural Voigue",
            "code" => "133517",
            "comuna_id" => 10209
        ],
        [
            "name" => "Posta de Salud Rural Curanue",
            "code" => "133522",
            "comuna_id" => 10208
        ],
        [
            "name" => "Posta de Salud Rural Candelaria (Quellón)",
            "code" => "133523",
            "comuna_id" => 10208
        ],
        [
            "name" => "Posta de Salud Rural Compu",
            "code" => "133524",
            "comuna_id" => 10208
        ],
        [
            "name" => "Posta de Salud Rural San Juan de Chadmo",
            "code" => "133525",
            "comuna_id" => 10208
        ],
        [
            "name" => "Posta de Salud Rural Pelu",
            "code" => "133526",
            "comuna_id" => 10208
        ],
        [
            "name" => "Posta de Salud Rural Punta Liles o Laitec",
            "code" => "133527",
            "comuna_id" => 10208
        ],
        [
            "name" => "Posta de Salud Rural Punta Paula o Coldita",
            "code" => "133528",
            "comuna_id" => 10208
        ],
        [
            "name" => "Posta de Salud Rural Piedras Blancas",
            "code" => "133529",
            "comuna_id" => 10208
        ],
        [
            "name" => "Posta de CONTUY",
            "code" => "133534",
            "comuna_id" => 10207
        ],
        [
            "name" => "Posta de Salud Rural Pureo",
            "code" => "133536",
            "comuna_id" => 10207
        ],
        [
            "name" => "Posta de Salud Rural Pulpito",
            "code" => "133538",
            "comuna_id" => 10203
        ],
        [
            "name" => "Posta de Salud Rural Caulín",
            "code" => "133542",
            "comuna_id" => 10202
        ],
        [
            "name" => "Posta de Salud Rural Puchaurán",
            "code" => "133546",
            "comuna_id" => 10205
        ],
        [
            "name" => "Posta de Salud Rural Pid - Pid",
            "code" => "133547",
            "comuna_id" => 10201
        ],
        [
            "name" => "Posta de Salud Rural Coinco",
            "code" => "133548",
            "comuna_id" => 10208
        ],
        [
            "name" => "Posta de Salud Rural Chadmo Central",
            "code" => "133549",
            "comuna_id" => 10208
        ],
        [
            "name" => "Posta de Salud Rural Auchac",
            "code" => "133550",
            "comuna_id" => 10208
        ],
        [
            "name" => "Posta de Salud Rural Yaldad",
            "code" => "133551",
            "comuna_id" => 10208
        ],
        [
            "name" => "Posta de Salud Rural Chaulinec La Villa",
            "code" => "133552",
            "comuna_id" => 10210
        ],
        [
            "name" => "Posta Natri",
            "code" => "133553",
            "comuna_id" => 10203
        ],
        [
            "name" => "Posta Curaco de Vilopulli",
            "code" => "133554",
            "comuna_id" => 10203
        ],
        [
            "name" => "Posta Nalhuitad",
            "code" => "133555",
            "comuna_id" => 10203
        ],
        [
            "name" => "Posta Cucao",
            "code" => "133556",
            "comuna_id" => 10203
        ],
        [
            "name" => "Posta de Salud Rural Coipomo",
            "code" => "133557",
            "comuna_id" => 10202
        ],
        [
            "name" => "Posta de Salud Rural Inio",
            "code" => "133558",
            "comuna_id" => 10208
        ],
        [
            "name" => "Posta de Salud Rural Butalcura",
            "code" => "133559",
            "comuna_id" => 10205
        ],
        [
            "name" => "Posta de Salud Rural San José",
            "code" => "133560",
            "comuna_id" => 10207
        ],
        [
            "name" => "Posta de Salud Rural Chaullín",
            "code" => "133561",
            "comuna_id" => 10208
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Carlina Paillacar",
            "code" => "133703",
            "comuna_id" => 10210
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Bellavista",
            "code" => "133725",
            "comuna_id" => 10202
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Metahue",
            "code" => "133740",
            "comuna_id" => 10209
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Huillinco",
            "code" => "133745",
            "comuna_id" => 10203
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Llau Llao",
            "code" => "133775",
            "comuna_id" => 10201
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Kintunien",
            "code" => "133776",
            "comuna_id" => 10201
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Rukalaf",
            "code" => "133796",
            "comuna_id" => 10208
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Vista Hermosa",
            "code" => "133797",
            "comuna_id" => 10208
        ],
        [
            "name" => "Centro Médico Kenal",
            "code" => "200000",
            "comuna_id" => 8101
        ],
        [
            "name" => "Laboratorio Clínico Labomedic",
            "code" => "200001",
            "comuna_id" => 8103
        ],
        [
            "name" => "Centro Médico CENTROMED",
            "code" => "200002",
            "comuna_id" => 5109
        ],
        [
            "name" => "Integramédica Talca",
            "code" => "200003",
            "comuna_id" => 7101
        ],
        [
            "name" => "Centro de Diálisis Interdial Limitada",
            "code" => "200004",
            "comuna_id" => 6101
        ],
        [
            "name" => "Laboratorio Clínico Blanco",
            "code" => "200005",
            "comuna_id" => 3301
        ],
        [
            "name" => "Laboratorio Clínico Bionet",
            "code" => "200006",
            "comuna_id" => 3301
        ],
        [
            "name" => "Laboratorio Chañaral",
            "code" => "200007",
            "comuna_id" => 3201
        ],
        [
            "name" => "Laboratorio Clínico López",
            "code" => "200008",
            "comuna_id" => 3301
        ],
        [
            "name" => "Centro de Salud Familiar Quillahue",
            "code" => "200009",
            "comuna_id" => 10201
        ],
        [
            "name" => "SAPU-Santa Laura",
            "code" => "200010",
            "comuna_id" => 13105
        ],
        [
            "name" => "SAPU-San Joaquín",
            "code" => "200011",
            "comuna_id" => 13129
        ],
        [
            "name" => "Centro de Diálisis Integral",
            "code" => "200012",
            "comuna_id" => 6101
        ],
        [
            "name" => "Centro de Diálisis Rengo",
            "code" => "200013",
            "comuna_id" => 6115
        ],
        [
            "name" => "Centro de Diálisis San Fernando",
            "code" => "200014",
            "comuna_id" => 6301
        ],
        [
            "name" => "Centro de Diálisis San José Chimbarongo",
            "code" => "200015",
            "comuna_id" => 6303
        ],
        [
            "name" => "Centro de Diálisis Santa Cruz",
            "code" => "200016",
            "comuna_id" => 6310
        ],
        [
            "name" => "Centro de Diálisis SERDIAL Limitada",
            "code" => "200017",
            "comuna_id" => 6301
        ],
        [
            "name" => "Centro de Diálisis DIAL",
            "code" => "200018",
            "comuna_id" => 6101
        ],
        [
            "name" => "Policlínico de la Asociación Chilena de Seguridad Coquimbo",
            "code" => "200019",
            "comuna_id" => 4102
        ],
        [
            "name" => "Centro de Diálisis Clinidial Las Compañías",
            "code" => "200020",
            "comuna_id" => 4101
        ],
        [
            "name" => "Laboratorio Clínico Servicios Médicos Valparaíso E.I.R.L",
            "code" => "200021",
            "comuna_id" => 5101
        ],
        [
            "name" => "Policlínico Instituto de Seguridad del Trabajo",
            "code" => "200022",
            "comuna_id" => 15101
        ],
        [
            "name" => "Laboratorio Clínico Biovida E.I.R.L",
            "code" => "200023",
            "comuna_id" => 7102
        ],
        [
            "name" => "Centro Médico y Dental La Araucana Rancagua",
            "code" => "200024",
            "comuna_id" => 6101
        ],
        [
            "name" => "Policlínico de Asociación Chilena de Seguridad",
            "code" => "200025",
            "comuna_id" => 12401
        ],
        [
            "name" => "Laboratorio  Clínico MACROLAB",
            "code" => "200026",
            "comuna_id" => 8101
        ],
        [
            "name" => "Servicios de Salud Integrados S.A. (Chicureo)",
            "code" => "200027",
            "comuna_id" => 13301
        ],
        [
            "name" => "Asociación Chilena de Seguridad AChS San Javier",
            "code" => "200028",
            "comuna_id" => 7406
        ],
        [
            "name" => "Asociación Chilena de Seguridad AChS Linares",
            "code" => "200029",
            "comuna_id" => 7401
        ],
        [
            "name" => "Asociación Chilena de Seguridad AChS Constitución",
            "code" => "200030",
            "comuna_id" => 7102
        ],
        [
            "name" => "Centro Médico Integramédica Bio Bio",
            "code" => "200031",
            "comuna_id" => 8101
        ],
        [
            "name" => "Policlínico AChS Laja",
            "code" => "200032",
            "comuna_id" => 8304
        ],
        [
            "name" => "Policlínico Asociación Chilena de Seguridad AChS Tocopilla",
            "code" => "200033",
            "comuna_id" => 2301
        ],
        [
            "name" => "Policíinico Asociación Chilena de Seguridad AChS Calama",
            "code" => "200034",
            "comuna_id" => 2201
        ],
        [
            "name" => "Policlínico Asociación Chilena de Seguridad AChS Mejillones",
            "code" => "200035",
            "comuna_id" => 2102
        ],
        [
            "name" => "Policlínico AChS Cabrero",
            "code" => "200036",
            "comuna_id" => 8303
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Elena Caffarena",
            "code" => "200037",
            "comuna_id" => 13123
        ],
        [
            "name" => "Posta de Salud Rural Alquihue",
            "code" => "200038",
            "comuna_id" => 7406
        ],
        [
            "name" => "Asociación Chilena de Seguridad AChS La Calera",
            "code" => "200039",
            "comuna_id" => 5502
        ],
        [
            "name" => "Centro de Diálisis A y R",
            "code" => "200040",
            "comuna_id" => 6310
        ],
        [
            "name" => "SAPU-Libertadores",
            "code" => "200041",
            "comuna_id" => 13107
        ],
        [
            "name" => "COSAM Rancagua 2",
            "code" => "200042",
            "comuna_id" => 6101
        ],
        [
            "name" => "COSAM Graneros",
            "code" => "200043",
            "comuna_id" => 6106
        ],
        [
            "name" => "COSAM Doñihue",
            "code" => "200044",
            "comuna_id" => 6105
        ],
        [
            "name" => "Vacunatorio Caledonian",
            "code" => "200045",
            "comuna_id" => 5109
        ],
        [
            "name" => "Diagnóstika",
            "code" => "200046",
            "comuna_id" => 13123
        ],
        [
            "name" => "Laboratorio SANALAB S. A.",
            "code" => "200047",
            "comuna_id" => 13101
        ],
        [
            "name" => "Policlínico Asociación Chilena de Seguridad AChS Arauco",
            "code" => "200048",
            "comuna_id" => 8202
        ],
        [
            "name" => "Policlínico Asociación Chilena de Seguridad AChS Cañete",
            "code" => "200049",
            "comuna_id" => 8203
        ],
        [
            "name" => "Hospital Clínico Universidad de Los Andes",
            "code" => "200050",
            "comuna_id" => 13114
        ],
        [
            "name" => "SAPU-Trinidad",
            "code" => "200051",
            "comuna_id" => 13110
        ],
        [
            "name" => "Posta de Salud Rural Chaimávida",
            "code" => "200052",
            "comuna_id" => 8101
        ],
        [
            "name" => "Clínica Ensenada",
            "code" => "200053",
            "comuna_id" => 13108
        ],
        [
            "name" => "Centro de Diálisis Tecnodial Ltda.",
            "code" => "200054",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro de Diálisis Los Ángeles Limitada",
            "code" => "200055",
            "comuna_id" => 9111
        ],
        [
            "name" => "Centro de Diálisis VidaDial Collipulli",
            "code" => "200056",
            "comuna_id" => 9202
        ],
        [
            "name" => "Centro de Diálisis Villarrica Limitada",
            "code" => "200057",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro de Diálisis Villarrica Ltda.",
            "code" => "200058",
            "comuna_id" => 9120
        ],
        [
            "name" => "Centro de Diálisis Araucanía Limitada",
            "code" => "200059",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro de Diálisis Temuco Ltda.",
            "code" => "200060",
            "comuna_id" => 9211
        ],
        [
            "name" => "Centro de Diálisis Bayo Dial",
            "code" => "200061",
            "comuna_id" => 9201
        ],
        [
            "name" => "Centro de Diálisis Angol Dial Ltda.",
            "code" => "200062",
            "comuna_id" => 9201
        ],
        [
            "name" => "Clínica Alemana de La Dehesa",
            "code" => "200063",
            "comuna_id" => 13115
        ],
        [
            "name" => "Integramédica Mall Plaza Sur",
            "code" => "200064",
            "comuna_id" => 13401
        ],
        [
            "name" => "Centro Médico Docente Asistencial Universidad San Sebastián",
            "code" => "200065",
            "comuna_id" => 10101
        ],
        [
            "name" => "Sección Sanidad Puerto Montt de la Policía de Investigaciones de Chile",
            "code" => "200066",
            "comuna_id" => 10101
        ],
        [
            "name" => "Policlínico de la Mutual de Seguridad CChC Quellón",
            "code" => "200067",
            "comuna_id" => 10208
        ],
        [
            "name" => "Policlínico de la Mutual de Seguridad CChC Castro",
            "code" => "200068",
            "comuna_id" => 10201
        ],
        [
            "name" => "Policlínico de Funcionarios de la Universidad de Los Lagos",
            "code" => "200069",
            "comuna_id" => 10301
        ],
        [
            "name" => "Centro Médico Osorno Salud",
            "code" => "200070",
            "comuna_id" => 10301
        ],
        [
            "name" => "Policlínico de la Mutual de Seguridad CChC Ancud",
            "code" => "200071",
            "comuna_id" => 10202
        ],
        [
            "name" => "Centro de Salud Familiar Villa Magisterio",
            "code" => "200072",
            "comuna_id" => 7101
        ],
        [
            "name" => "Centro de Salud Medicina Integral y Ejercicio",
            "code" => "200073",
            "comuna_id" => 10101
        ],
        [
            "name" => "Centro de Sangre Austral",
            "code" => "200074",
            "comuna_id" => 10101
        ],
        [
            "name" => "Centro de Salud Familiar San Vicente de Tagua Tagua",
            "code" => "200075",
            "comuna_id" => 6117
        ],
        [
            "name" => "Hospital de Chaitén",
            "code" => "200076",
            "comuna_id" => 10401
        ],
        [
            "name" => "SAPU-Dr. Juan Cartes Arias",
            "code" => "200077",
            "comuna_id" => 8106
        ],
        [
            "name" => "Vacunatorio Estudio Pediátrico Integral",
            "code" => "200078",
            "comuna_id" => 5109
        ],
        [
            "name" => "Instituto de Seguridad del Trabajo (IST)",
            "code" => "200079",
            "comuna_id" => 7301
        ],
        [
            "name" => "Centro Odontológico La Reina",
            "code" => "200080",
            "comuna_id" => 13113
        ],
        [
            "name" => "Clínica Orema",
            "code" => "200081",
            "comuna_id" => 13132
        ],
        [
            "name" => "Posta de Salud Rural Chauchil",
            "code" => "200082",
            "comuna_id" => 10403
        ],
        [
            "name" => "Laboratorio Clínico Centro Médico Traiguén",
            "code" => "200083",
            "comuna_id" => 9210
        ],
        [
            "name" => "Laboratorio Clínico Masterlab",
            "code" => "200084",
            "comuna_id" => 9108
        ],
        [
            "name" => "SAPU-Dr. Marcelo Lopetegui Adams",
            "code" => "200085",
            "comuna_id" => 10301
        ],
        [
            "name" => "SAPU-La Floresta",
            "code" => "200086",
            "comuna_id" => 8112
        ],
        [
            "name" => "Vacunatorio Home Nursing",
            "code" => "200087",
            "comuna_id" => 13201
        ],
        [
            "name" => "Integramédica Florida Vespucio",
            "code" => "200088",
            "comuna_id" => 13110
        ],
        [
            "name" => "Integramédica Santa Lucía",
            "code" => "200089",
            "comuna_id" => 13401
        ],
        [
            "name" => "Clínica Policenter",
            "code" => "200090",
            "comuna_id" => 13201
        ],
        [
            "name" => "Mirandes S.P.A.",
            "code" => "200091",
            "comuna_id" => 13123
        ],
        [
            "name" => "Clínica Dermacross",
            "code" => "200092",
            "comuna_id" => 13132
        ],
        [
            "name" => "Posta de Salud Cayumapu",
            "code" => "200093",
            "comuna_id" => 14101
        ],
        [
            "name" => "SAPU-Dr. Amador Neghme de Arica",
            "code" => "200094",
            "comuna_id" => 15101
        ],
        [
            "name" => "SAPU-Iris Véliz Hume",
            "code" => "200095",
            "comuna_id" => 15101
        ],
        [
            "name" => "SAPU-Huara",
            "code" => "200096",
            "comuna_id" => 1404
        ],
        [
            "name" => "SAPU-Central Oriente de Antofagasta",
            "code" => "200097",
            "comuna_id" => 2101
        ],
        [
            "name" => "SAPU-Centro Sur de Antofagasta",
            "code" => "200098",
            "comuna_id" => 2101
        ],
        [
            "name" => "SAPU-Hermanos Carrera",
            "code" => "200099",
            "comuna_id" => 3301
        ],
        [
            "name" => "SAPU-Dr. Bernardo Mellibovsky",
            "code" => "200100",
            "comuna_id" => 3101
        ],
        [
            "name" => "SAPU-Joan Crawford Astudillo",
            "code" => "200101",
            "comuna_id" => 3301
        ],
        [
            "name" => "SAPU-Paipote",
            "code" => "200102",
            "comuna_id" => 3101
        ],
        [
            "name" => "SAPU-Rosario Corvalán",
            "code" => "200103",
            "comuna_id" => 3102
        ],
        [
            "name" => "SAPU-El Palomar",
            "code" => "200104",
            "comuna_id" => 3101
        ],
        [
            "name" => "SAPU-Juan Pablo II",
            "code" => "200105",
            "comuna_id" => 4101
        ],
        [
            "name" => "SAPU-Barrancas",
            "code" => "200106",
            "comuna_id" => 5601
        ],
        [
            "name" => "SAPU-Diputado Manuel Bustos Huerta",
            "code" => "200107",
            "comuna_id" => 5601
        ],
        [
            "name" => "SAPU-Marcelo Mena",
            "code" => "200108",
            "comuna_id" => 5101
        ],
        [
            "name" => "SAPU-Reina Isabel II",
            "code" => "200109",
            "comuna_id" => 5101
        ],
        [
            "name" => "SAPU-Gómez Carreño",
            "code" => "200110",
            "comuna_id" => 5109
        ],
        [
            "name" => "SAPU-Las Torres",
            "code" => "200111",
            "comuna_id" => 5109
        ],
        [
            "name" => "SAPU-Pompeya",
            "code" => "200112",
            "comuna_id" => 5801
        ],
        [
            "name" => "SAPU-Reñaca Alto",
            "code" => "200113",
            "comuna_id" => 5109
        ],
        [
            "name" => "SAPU-San Pedro",
            "code" => "200114",
            "comuna_id" => 5501
        ],
        [
            "name" => "SAPU-Quillota",
            "code" => "200115",
            "comuna_id" => 5501
        ],
        [
            "name" => "SAPU Centenario",
            "code" => "200116",
            "comuna_id" => 5301
        ],
        [
            "name" => "SAPU-Padre Vicente Irarrázabal",
            "code" => "200117",
            "comuna_id" => 13106
        ],
        [
            "name" => "SAPU-Luis Chavarría",
            "code" => "200118",
            "comuna_id" => 13103
        ],
        [
            "name" => "SAPU-Dr. Alberto Allende Jones",
            "code" => "200119",
            "comuna_id" => 13601
        ],
        [
            "name" => "SAPU-Dr. Arturo Albertz",
            "code" => "200120",
            "comuna_id" => 13103
        ],
        [
            "name" => "SAPU-Dr. Avendaño",
            "code" => "200121",
            "comuna_id" => 13117
        ],
        [
            "name" => "SAPU-Dr. Fernando Monckeberg",
            "code" => "200122",
            "comuna_id" => 13605
        ],
        [
            "name" => "SAPU-Dr. Francisco Boris Soler",
            "code" => "200123",
            "comuna_id" => 13501
        ],
        [
            "name" => "SAPU-Dr. Gustavo Molina",
            "code" => "200124",
            "comuna_id" => 13124
        ],
        [
            "name" => "SAPU-Dr. Raúl Yazigi",
            "code" => "200125",
            "comuna_id" => 13117
        ],
        [
            "name" => "SAPU-Garín",
            "code" => "200126",
            "comuna_id" => 13126
        ],
        [
            "name" => "SAPU-Isla de Maipo",
            "code" => "200127",
            "comuna_id" => 13603
        ],
        [
            "name" => "SAPU-Lo Franco",
            "code" => "200128",
            "comuna_id" => 13126
        ],
        [
            "name" => "SAPU-Pablo Neruda",
            "code" => "200129",
            "comuna_id" => 13117
        ],
        [
            "name" => "SAPU-Peñaflor",
            "code" => "200130",
            "comuna_id" => 13605
        ],
        [
            "name" => "SAPU-Violeta Parra",
            "code" => "200131",
            "comuna_id" => 13124
        ],
        [
            "name" => "SAPU-María Pinto",
            "code" => "200132",
            "comuna_id" => 13504
        ],
        [
            "name" => "SAPU-Bicentenario",
            "code" => "200133",
            "comuna_id" => 13128
        ],
        [
            "name" => "SAPU-Dr. Adalberto Steeger",
            "code" => "200134",
            "comuna_id" => 13103
        ],
        [
            "name" => "SAPU-Dr. Edelberto Elgueta",
            "code" => "200135",
            "comuna_id" => 13501
        ],
        [
            "name" => "SAPU-El Monte",
            "code" => "200136",
            "comuna_id" => 13602
        ],
        [
            "name" => "SAPU-Huamachuco",
            "code" => "200137",
            "comuna_id" => 13128
        ],
        [
            "name" => "SAPU-Pudahuel Estrella",
            "code" => "200138",
            "comuna_id" => 13124
        ],
        [
            "name" => "SAPU-Pudahuel Poniente",
            "code" => "200139",
            "comuna_id" => 13124
        ],
        [
            "name" => "SAPU-Santa Anita",
            "code" => "200140",
            "comuna_id" => 13117
        ],
        [
            "name" => "SAPU-Dr. Iván Insunza",
            "code" => "200141",
            "comuna_id" => 13119
        ],
        [
            "name" => "SAPU-La Reina",
            "code" => "200142",
            "comuna_id" => 13113
        ],
        [
            "name" => "SAPU-Aguilucho",
            "code" => "200143",
            "comuna_id" => 13123
        ],
        [
            "name" => "SAPU-José Alvo",
            "code" => "200144",
            "comuna_id" => 13110
        ],
        [
            "name" => "SAPU-Centro",
            "code" => "200145",
            "comuna_id" => 6301
        ],
        [
            "name" => "SAPU-Ignacio Caroca",
            "code" => "200146",
            "comuna_id" => 6101
        ],
        [
            "name" => "SAPU-Rosario",
            "code" => "200147",
            "comuna_id" => 6115
        ],
        [
            "name" => "SAPU-Valentín Letelier",
            "code" => "200148",
            "comuna_id" => 7401
        ],
        [
            "name" => "SAPU-Isabel Riquelme",
            "code" => "200149",
            "comuna_id" => 8401
        ],
        [
            "name" => "SAPU-Víctor Manuel Fernández",
            "code" => "200150",
            "comuna_id" => 8101
        ],
        [
            "name" => "SAPU-Bellavista",
            "code" => "200151",
            "comuna_id" => 8111
        ],
        [
            "name" => "SAPU-Amanecer",
            "code" => "200152",
            "comuna_id" => 9101
        ],
        [
            "name" => "SAPU-Pucón",
            "code" => "200153",
            "comuna_id" => 9115
        ],
        [
            "name" => "SAPU-Pueblo Nuevo",
            "code" => "200154",
            "comuna_id" => 9101
        ],
        [
            "name" => "SAPU-Freire",
            "code" => "200155",
            "comuna_id" => 9105
        ],
        [
            "name" => "SAPU-Labranza",
            "code" => "200156",
            "comuna_id" => 9101
        ],
        [
            "name" => "SAPU-Los Volcanes",
            "code" => "200157",
            "comuna_id" => 9120
        ],
        [
            "name" => "SAPU-Nueva Imperial",
            "code" => "200158",
            "comuna_id" => 9111
        ],
        [
            "name" => "SAPU-Pedro de Valdivia",
            "code" => "200159",
            "comuna_id" => 9101
        ],
        [
            "name" => "SAPU-Pulmahue",
            "code" => "200160",
            "comuna_id" => 9112
        ],
        [
            "name" => "SAPU-Villa Alegre",
            "code" => "200161",
            "comuna_id" => 9101
        ],
        [
            "name" => "SAPU-Villarica",
            "code" => "200162",
            "comuna_id" => 9120
        ],
        [
            "name" => "SAPU-Belarmina Paredes",
            "code" => "200163",
            "comuna_id" => 14202
        ],
        [
            "name" => "SAPU-Ranco",
            "code" => "200164",
            "comuna_id" => 14203
        ],
        [
            "name" => "SAPU-Niebla",
            "code" => "200165",
            "comuna_id" => 14101
        ],
        [
            "name" => "SAPU-Panguipulli",
            "code" => "200166",
            "comuna_id" => 14108
        ],
        [
            "name" => "SAPU-Carmela Carvajal",
            "code" => "200167",
            "comuna_id" => 10101
        ],
        [
            "name" => "SAPU-Frutillar",
            "code" => "200168",
            "comuna_id" => 10105
        ],
        [
            "name" => "SAPU-Los Muermos",
            "code" => "200169",
            "comuna_id" => 10106
        ],
        [
            "name" => "SAPU-Dr. Alejandro Gutiérrez",
            "code" => "200170",
            "comuna_id" => 11101
        ],
        [
            "name" => "SAPU-18 de Septiembre",
            "code" => "200171",
            "comuna_id" => 12101
        ],
        [
            "name" => "SAPU-Eleuterio Ramírez",
            "code" => "200172",
            "comuna_id" => 8205
        ],
        [
            "name" => "SAPU-Los Álamos",
            "code" => "200173",
            "comuna_id" => 8206
        ],
        [
            "name" => "SAPU-Huequén",
            "code" => "200174",
            "comuna_id" => 9201
        ],
        [
            "name" => "SAPU-Victoria",
            "code" => "200175",
            "comuna_id" => 9211
        ],
        [
            "name" => "SAPU-Castro",
            "code" => "200176",
            "comuna_id" => 10201
        ],
        [
            "name" => "SAPU-2 Septiembre",
            "code" => "200177",
            "comuna_id" => 8301
        ],
        [
            "name" => "SAPU-Nororiente",
            "code" => "200178",
            "comuna_id" => 8301
        ],
        [
            "name" => "SAPU-Nuevo Horizonte",
            "code" => "200179",
            "comuna_id" => 8301
        ],
        [
            "name" => "Centro Médico Lifemed",
            "code" => "200180",
            "comuna_id" => 15101
        ],
        [
            "name" => "Centro de Diálisis Ehrlich Limitada",
            "code" => "200181",
            "comuna_id" => 2101
        ],
        [
            "name" => "SAPU-Tierras Blancas II",
            "code" => "200182",
            "comuna_id" => 4102
        ],
        [
            "name" => "Centro de Salud Familiar El Carmen",
            "code" => "200183",
            "comuna_id" => 9101
        ],
        [
            "name" => "Puesto de Atención Médica Especializada (Tierra Amarilla)",
            "code" => "200184",
            "comuna_id" => 3103
        ],
        [
            "name" => "Puesto de Atención Médica Especializada (Diego de Almagro)",
            "code" => "200185",
            "comuna_id" => 3202
        ],
        [
            "name" => "Puesto de Atención Médica Especializada (Chañaral)",
            "code" => "200186",
            "comuna_id" => 3201
        ],
        [
            "name" => "Centro Médico Fermín Roca",
            "code" => "200187",
            "comuna_id" => 12101
        ],
        [
            "name" => "Centro de Especialidades Odontológicas Leng",
            "code" => "200188",
            "comuna_id" => 13123
        ],
        [
            "name" => "SAR Enfermera Sofía Pincheira",
            "code" => "200189",
            "comuna_id" => 13102
        ],
        [
            "name" => "Policlínico del Centro de Cumplimiento Penitenciario Iquique",
            "code" => "200190",
            "comuna_id" => 1101
        ],
        [
            "name" => "Policlínico de Atención Primaria del Centro de Detención Preventiva de Pozo Almonte",
            "code" => "200191",
            "comuna_id" => 1401
        ],
        [
            "name" => "Centro de Diálisis Hemosur (Osorno)",
            "code" => "200192",
            "comuna_id" => 10301
        ],
        [
            "name" => "Clínica WLK",
            "code" => "200193",
            "comuna_id" => 13123
        ],
        [
            "name" => "Laboratorio Clínico Loncomilla",
            "code" => "200194",
            "comuna_id" => 7401
        ],
        [
            "name" => "Laboratorio Clínico Fundación Betania",
            "code" => "200195",
            "comuna_id" => 7301
        ],
        [
            "name" => "Laboratorio Clínico Loncomilla (Talca)",
            "code" => "200196",
            "comuna_id" => 7101
        ],
        [
            "name" => "Centro Médico y Dental La Araucana Temuco",
            "code" => "200197",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro Médico HTS SpA",
            "code" => "200198",
            "comuna_id" => 13123
        ],
        [
            "name" => "Laboratorio Clínico Talca",
            "code" => "200199",
            "comuna_id" => 7101
        ],
        [
            "name" => "COSAM San José de Maipo",
            "code" => "200200",
            "comuna_id" => 13203
        ],
        [
            "name" => "Laboratorio Clínico Bioanálysis",
            "code" => "200201",
            "comuna_id" => 7301
        ],
        [
            "name" => "Carol Fabiola Valenzuela Bahamondes",
            "code" => "200202",
            "comuna_id" => 11101
        ],
        [
            "name" => "Crystal Lab Scientific Diagnostics",
            "code" => "200203",
            "comuna_id" => 2101
        ],
        [
            "name" => "Centro de Diálisis Renacer",
            "code" => "200204",
            "comuna_id" => 2201
        ],
        [
            "name" => "Centro Médico Dental Santa Catalina",
            "code" => "200205",
            "comuna_id" => 13402
        ],
        [
            "name" => "Margaret Meneses Meneses",
            "code" => "200206",
            "comuna_id" => 2201
        ],
        [
            "name" => "Centro de Salud Familiar Conun Huenu",
            "code" => "200207",
            "comuna_id" => 9112
        ],
        [
            "name" => "Vacunatorio Sociedad de Enfermería Asistencial E.I.R.L",
            "code" => "200208",
            "comuna_id" => 2201
        ],
        [
            "name" => "COSAM Rahue",
            "code" => "200209",
            "comuna_id" => 10301
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Coñimo",
            "code" => "200210",
            "comuna_id" => 13129
        ],
        [
            "name" => "Vacunatorio Labonort Salud Integral",
            "code" => "200211",
            "comuna_id" => 2101
        ],
        [
            "name" => "Laboratorio Clínico Bionet S.A.",
            "code" => "200212",
            "comuna_id" => 7101
        ],
        [
            "name" => "Laboratorio Medinort Salud Ocupacional e Integral S.A.",
            "code" => "200213",
            "comuna_id" => 2101
        ],
        [
            "name" => "INMUNIN SpA",
            "code" => "200214",
            "comuna_id" => 2101
        ],
        [
            "name" => "Centro Médico y Dental Megasalud Quilicura",
            "code" => "200215",
            "comuna_id" => 13125
        ],
        [
            "name" => "Centro de Salud Familiar Dra. Maria Cristina Rojas Neumann",
            "code" => "200216",
            "comuna_id" => 2101
        ],
        [
            "name" => "Laboratorio Clínico Médicos Asociados de Curicó",
            "code" => "200217",
            "comuna_id" => 7301
        ],
        [
            "name" => "Centro Médico Clínica Hospital Profesor",
            "code" => "200218",
            "comuna_id" => 13119
        ],
        [
            "name" => "Centro de Salud Familiar Raúl Sánchez Bañados",
            "code" => "200219",
            "comuna_id" => 5401
        ],
        [
            "name" => "Policlínico ACHS Curanilahue",
            "code" => "200220",
            "comuna_id" => 8205
        ],
        [
            "name" => "Clínica Dental CMPC Maderas S.A.",
            "code" => "200221",
            "comuna_id" => 8306
        ],
        [
            "name" => "Consultorio Santa María Josefa",
            "code" => "200222",
            "comuna_id" => 8401
        ],
        [
            "name" => "Laboratorio Clínico Megasalud S.A.",
            "code" => "200223",
            "comuna_id" => 4101
        ],
        [
            "name" => "Integramédica Rancagua",
            "code" => "200224",
            "comuna_id" => 6101
        ],
        [
            "name" => "Posta de Salud Rural Esmeralda",
            "code" => "200225",
            "comuna_id" => 6115
        ],
        [
            "name" => "Centro Médico y Dental ISP",
            "code" => "200226",
            "comuna_id" => 13120
        ],
        [
            "name" => "Clínica Psiquiátrica Mida",
            "code" => "200227",
            "comuna_id" => 13132
        ],
        [
            "name" => "Centro Médico y Dental Servicio de Bienestar MOP",
            "code" => "200228",
            "comuna_id" => 13101
        ],
        [
            "name" => "Centro de Diálisis Nephrocare Los Ríos",
            "code" => "200229",
            "comuna_id" => 14101
        ],
        [
            "name" => "Centro de Diálisis Valdivia",
            "code" => "200230",
            "comuna_id" => 14101
        ],
        [
            "name" => "Instituto de Rehabilitación Infantil TELETÓN (Coyhaique)",
            "code" => "200231",
            "comuna_id" => 11101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar San Máximo",
            "code" => "200232",
            "comuna_id" => 7109
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Villa Francia",
            "code" => "200233",
            "comuna_id" => 7105
        ],
        [
            "name" => "Clínica MEDS La Dehesa",
            "code" => "200234",
            "comuna_id" => 13115
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Guacamayo",
            "code" => "200235",
            "comuna_id" => 14101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Villa Olímpica",
            "code" => "200236",
            "comuna_id" => 13120
        ],
        [
            "name" => "Centro Clínico San Bernardo",
            "code" => "200237",
            "comuna_id" => 13401
        ],
        [
            "name" => "Laboratorio Clínico de Nueva Clínica Tarapacá",
            "code" => "200238",
            "comuna_id" => 1101
        ],
        [
            "name" => "Instituto de Rehabilitación Infantil TELETÓN (Iquique)",
            "code" => "200239",
            "comuna_id" => 1101
        ],
        [
            "name" => "Centro de ImagenologÃ­a médica Imagensalud",
            "code" => "200240",
            "comuna_id" => 6301
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Oasis",
            "code" => "200241",
            "comuna_id" => 2201
        ],
        [
            "name" => "Centro de Diálisis Nephrocare Padre Las Casas",
            "code" => "200242",
            "comuna_id" => 9112
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Cabrero",
            "code" => "200243",
            "comuna_id" => 8303
        ],
        [
            "name" => "Instituto de Rehabilitación Infantil TELETÓN (Temuco)",
            "code" => "200244",
            "comuna_id" => 9101
        ],
        [
            "name" => "Instituto de Rehabilitación Infantil TELETÓN (Antofagasta)",
            "code" => "200245",
            "comuna_id" => 2101
        ],
        [
            "name" => "Laboratorio Clínico UC Temuco",
            "code" => "200246",
            "comuna_id" => 9101
        ],
        [
            "name" => "Vacunatorio Austral E.I.R.L.",
            "code" => "200247",
            "comuna_id" => 10109
        ],
        [
            "name" => "CDR de Adultos Mayores con Demencia",
            "code" => "200248",
            "comuna_id" => 10301
        ],
        [
            "name" => "Instituto de Rehabilitación Infantil TELETÓN (Talca)",
            "code" => "200249",
            "comuna_id" => 7101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Máfil",
            "code" => "200250",
            "comuna_id" => 14105
        ],
        [
            "name" => "Centro de Salud Esmeralda",
            "code" => "200251",
            "comuna_id" => 13601
        ],
        [
            "name" => "Centro de Salud La Araucana Salud",
            "code" => "200252",
            "comuna_id" => 13501
        ],
        [
            "name" => "Centro de Salud La Araucana Salud S. A.",
            "code" => "200253",
            "comuna_id" => 13101
        ],
        [
            "name" => "Laboratorio Clínico Kausay",
            "code" => "200254",
            "comuna_id" => 2101
        ],
        [
            "name" => "Centro de Diálisis Nephrocare",
            "code" => "200255",
            "comuna_id" => 7401
        ],
        [
            "name" => "Centro de Salud Mental Comunitaria",
            "code" => "200256",
            "comuna_id" => 11101
        ],
        [
            "name" => "Centro de Diálisis Nefrodial",
            "code" => "200257",
            "comuna_id" => 7401
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Los Copihues",
            "code" => "200258",
            "comuna_id" => 4301
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Santa Barbara",
            "code" => "200259",
            "comuna_id" => 8311
        ],
        [
            "name" => "Centro Médico Vida Rengo",
            "code" => "200260",
            "comuna_id" => 6115
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Doña Isabel",
            "code" => "200261",
            "comuna_id" => 8401
        ],
        [
            "name" => "Policlínico Universidad Pedro de Valdivia",
            "code" => "200262",
            "comuna_id" => 4101
        ],
        [
            "name" => "Laboratorio Clínico Cegnos",
            "code" => "200263",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Santa Teresa",
            "code" => "200264",
            "comuna_id" => 6108
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Andacollo",
            "code" => "200265",
            "comuna_id" => 13123
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar María Salas",
            "code" => "200266",
            "comuna_id" => 13503
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Laja",
            "code" => "200267",
            "comuna_id" => 8304
        ],
        [
            "name" => "Servicio de Urgencia de Alta Resolutividad Plan de Valparaíso",
            "code" => "200268",
            "comuna_id" => 5101
        ],
        [
            "name" => "Laboratorio Clínico Megasalud Temuco",
            "code" => "200269",
            "comuna_id" => 9101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Santa Mónica",
            "code" => "200270",
            "comuna_id" => 9202
        ],
        [
            "name" => "Centro de Salud Mental Comunitaria La Calera",
            "code" => "200271",
            "comuna_id" => 5502
        ],
        [
            "name" => "Policlínico  Gendarmería Regional de Antofagasta",
            "code" => "200272",
            "comuna_id" => 2101
        ],
        [
            "name" => "Centro Comunitario de Salud Familiar Punta Mira",
            "code" => "200273",
            "comuna_id" => 4102
        ]
		];

		$comunas = Comuna::pluck('id', 'code');

		$data = [];
		foreach ($establecimientos as $establecimiento) {
			$establecimiento['comuna_id'] = $comunas[$establecimiento['comuna_id']];
			$establecimiento['created_at'] = Carbon::now();
			$establecimiento['updated_at'] = Carbon::now();
			$data[] = $establecimiento;
		}

		DB::table('establecimientos')->insert($data);
	}
}
