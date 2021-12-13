<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str; 

class CarrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('tb_carros')->insertGetId([
            'car_modelo' => '911',
            'car_ano' => '1980',
            'car_cilindrada' => '3000',
            'car_kmrodados' => '30000',
            'car_potencia' => '280',
            'car_link_imagem' => 'https://raw.githubusercontent.com/ElderB23/Group-B-Garage/main/images_carros/911.jpg',
            'car_descrição' => 'O Porsche 930 é um carro esportivo fabricado pela montadora alemã Porsche entre 1975 e 1989, conhecido pelo público como 911 Turbo. Foi o modelo 911 topo de gama do fabricante durante toda a sua duração de produção e, na altura da sua introdução, era o carro de produção mais rápido disponível na Alemanha. ',
            'car_preco' => '730000',
            'car_mar_codigo' => '1',
            'car_cor_codigo' => '1',
            'car_cat_codigo' => '1',
            'car_tip_codigo' => '8',
            'car_pos_codigo' => '2',
            'car_tra_codigo' => '1',
        ]);

        DB::table('tb_carros')->insertGetId([
            'car_modelo' => 'Giulia GTV',
            'car_ano' => '1965',
            'car_cilindrada' => '1500',
            'car_kmrodados' => '35000',
            'car_potencia' => '120',
            'car_link_imagem' => 'https://raw.githubusercontent.com/ElderB23/Group-B-Garage/main/images_carros/gtv.jpg',
            'car_descrição' => 'Os coupés das séries Alfa Romeo 105 e 115 são uma gama de carros fabricados pelo fabricante italiano Alfa Romeo de 1963 a 1977, com base em um piso encurtado do salão Giulia. Eles foram os sucessores do coupé Giulietta Sprint. ',
            'car_preco' => '720000',
            'car_mar_codigo' => '9',
            'car_cor_codigo' => '4',
            'car_cat_codigo' => '1',
            'car_tip_codigo' => '1',
            'car_pos_codigo' => '1',
            'car_tra_codigo' => '1',
        ]);


        DB::table('tb_carros')->insertGetId([
            'car_modelo' => '512 Testarossa',
            'car_ano' => '1987',
            'car_cilindrada' => '5000',
            'car_kmrodados' => '50000',
            'car_potencia' => '420',
            'car_link_imagem' => 'https://raw.githubusercontent.com/ElderB23/Group-B-Garage/main/images_carros/testa.jpg',
            'car_descrição' => 'O Ferrari Testarossa é um automóvel superdesportivo com motor central-traseiro de 12 cilindros opostos construído pela Ferrari. Teve a sua produção iniciada em 1984 e foi lançado como o sucessor do Ferrari Berlinetta Boxer. O estúdio Pininfarina desenhou o carro originalmente produzido de 1984 até 1991, e dois restyles foram efetuados pela Ferrari após 1991 com o encerramento de produção do Testarossa e início de produção do Ferrari 512 TR e do Ferrari 512 M que foram produzidos de 1992 até 1996. Mais de 10 mil Testarossas, 512 TR e F512 M foram produzidos, tornando-se um dos modelos mais comuns de Ferrari produzidos, apesar do seu alto preço e do design exótico. Em 1995, um F512 M foi vendido por U$ 220.000.',
            'car_preco' => '1200000',
            'car_mar_codigo' => '7',
            'car_cor_codigo' => '4',
            'car_cat_codigo' => '1',
            'car_tip_codigo' => '9',
            'car_pos_codigo' => '3',
            'car_tra_codigo' => '1',
        ]);

        DB::table('tb_carros')->insertGetId([
            'car_modelo' => 'Quattro',
            'car_ano' => '1984',
            'car_cilindrada' => '2000',
            'car_kmrodados' => '45000',
            'car_potencia' => '240',
            'car_link_imagem' => 'https://raw.githubusercontent.com/ElderB23/Group-B-Garage/main/images_carros/quattro.jpg',
            'car_descrição' => 'O Quattro foi um modelo de tração integral produzido pela Audi visando a participação em ralis. É considerado o melhor carro de ralis da história automobilística. Foi um carro um pouco polêmico por ter tração integral, porque na época carros com tração 4x4 eram sinônimo de problemas. Mas o Quattro mudou esse conceito, fazendo uma tração integral que não dava problemas técnicos frequentes. Começou fazendo sucesso nos ralis, principalmente nas mãos de Stig Blomqvist.',
            'car_preco' => '440000',
            'car_mar_codigo' => '2',
            'car_cor_codigo' => '3',
            'car_cat_codigo' => '3',
            'car_tip_codigo' => '10',
            'car_pos_codigo' => '1',
            'car_tra_codigo' => '3',
        ]);

        DB::table('tb_carros')->insertGetId([
            'car_modelo' => 'Opala SS',
            'car_ano' => '1975',
            'car_cilindrada' => '4100',
            'car_kmrodados' => '60000',
            'car_potencia' => '170',
            'car_link_imagem' => 'https://raw.githubusercontent.com/ElderB23/Group-B-Garage/main/images_carros/Opala%20SS%20frente.jpg',
            'car_descrição' => 'O Chevrolet Opala é um automóvel fabricado pela General Motors do Brasil, sendo o primeiro automóvel de passeio da montadora no país, produzido de 1968 a 1992. O Opala foi apresentado ao público brasileiro no Salão do Automóvel de 1968. Sua carroceria foi inspirada no alemão Opel Rekord, mas com estilo e mecânica norte-americana. Em um curto período de vendas, houve grande aceitação pelo público, tornando-se um modelo consagrado.',
            'car_preco' => '250000',
            'car_mar_codigo' => '10',
            'car_cor_codigo' => '6',
            'car_cat_codigo' => '1',
            'car_tip_codigo' => '2',
            'car_pos_codigo' => '1',
            'car_tra_codigo' => '1',
        ]);

        DB::table('tb_carros')->insertGetId([
            'car_modelo' => '037 Stradale',
            'car_ano' => '1983',
            'car_cilindrada' => '2000',
            'car_kmrodados' => '30000',
            'car_potencia' => '205',
            'car_link_imagem' => 'https://raw.githubusercontent.com/ElderB23/Group-B-Garage/main/images_carros/037.jpg',
            'car_descrição' => 'O Lancia Rally (Tipo 151, também conhecido como Lancia Rally 037, Lancia 037 ou Lancia-Abarth # 037 de seu código de projeto Abarth SE037) era um carro esportivo de motor central e carro de rally construído pela Lancia no início dos anos 1980 para competir em o Campeonato Mundial de Rally do Grupo B da FIA. Dirigido por Markku Alén, Attilio Bettega e Walter Röhrl, o carro rendeu à Lancia o campeonato mundial de construtores na temporada de 1983. Foi o último carro com tração traseira a vencer o WRC.',
            'car_preco' => '650000',
            'car_mar_codigo' => '3',
            'car_cor_codigo' => '4',
            'car_cat_codigo' => '1',
            'car_tip_codigo' => '1',
            'car_pos_codigo' => '1',
            'car_tra_codigo' => '1',
        ]);

        DB::table('tb_carros')->insertGetId([
            'car_modelo' => 'Countach',
            'car_ano' => '1988',
            'car_cilindrada' => '6200',
            'car_kmrodados' => '37000',
            'car_potencia' => '440',
            'car_link_imagem' => 'https://raw.githubusercontent.com/ElderB23/Group-B-Garage/main/images_carros/countach.jpg',
            'car_descrição' => 'O Lamborghini Countach foi um automóvel superesportivo produzido pela Lamborghini, na Itália. O primeiro protótipo surgiu em 1971, e a produção durou até 1990. O Countach não foi o primeiro carro de linhas angulosas e formato de cunha, mas certamente foi um dos modelos que ajudou a popularizar o conceito, presente em muitos outros supercarros desde então. Ele também popularizou a ideia de se "empurrar" o habitáculo dos passageiros para frente, a fim de acomodar um motor maior.',
            'car_preco' => '990000',
            'car_mar_codigo' => '11',
            'car_cor_codigo' => '5',
            'car_cat_codigo' => '1',
            'car_tip_codigo' => '6',
            'car_pos_codigo' => '3',
            'car_tra_codigo' => '1',
        ]);

        DB::table('tb_carros')->insertGetId([
            'car_modelo' => 'Spider',
            'car_ano' => '1967',
            'car_cilindrada' => '1500',
            'car_kmrodados' => '55000',
            'car_potencia' => '120',
            'car_link_imagem' => 'https://raw.githubusercontent.com/ElderB23/Group-B-Garage/main/images_carros/ALFA-ROMEO-SPIDER-00.jpg',
            'car_descrição' => 'O Alfa Romeo Spider (série 105/115) é um roadster de dois lugares, motor dianteiro e de tração traseira, fabricado e comercializado pela Alfa Romeo de 1966 a 1994 em quatro gerações distintas, ou Séries, cada uma com modificações que variam de modestas a extensas. ',
            'car_preco' => '220000',
            'car_mar_codigo' => '9',
            'car_cor_codigo' => '4',
            'car_cat_codigo' => '2',
            'car_tip_codigo' => '1',
            'car_pos_codigo' => '1',
            'car_tra_codigo' => '1',
        ]);

        DB::table('tb_carros')->insertGetId([
            'car_modelo' => '2000GT',
            'car_ano' => '1968',
            'car_cilindrada' => '2000',
            'car_kmrodados' => '20000',
            'car_potencia' => '220',
            'car_link_imagem' => 'https://raw.githubusercontent.com/ElderB23/Group-B-Garage/main/images_carros/2000gt.jpg',
            'car_descrição' => 'O Toyota 2000GT é um carro desportivo GT de dois lugares produzido entre 1967 e 1970 pela fabricante japonesa Toyota. Foi apresentado pela primeira vez no Salão do Automóvel de Tóquio em 1965 e revolucionou a visão do Japão do mundo automobilístico, provando que os fabricantes japoneses podiam produzir um carro desportivo para competir com os da Europa.',
            'car_preco' => '620000',
            'car_mar_codigo' => '6',
            'car_cor_codigo' => '4',
            'car_cat_codigo' => '1',
            'car_tip_codigo' => '2',
            'car_pos_codigo' => '1',
            'car_tra_codigo' => '1',
        ]);

        DB::table('tb_carros')->insertGetId([
            'car_modelo' => '944',
            'car_ano' => '1989',
            'car_cilindrada' => '3000',
            'car_kmrodados' => '40000',
            'car_potencia' => '240',
            'car_link_imagem' => 'https://raw.githubusercontent.com/ElderB23/Group-B-Garage/main/images_carros/944.jpg',
            'car_descrição' => 'O Porsche 944 é um carro esportivo fabricado pelo fabricante alemão de automóveis Porsche de 1982 a 1991. Um modelo de nível médio com motor dianteiro e tração traseira baseado na plataforma 924, o 944 estava disponível nos estilos de carroceria coupé ou cabriolet, com qualquer motores naturalmente aspirados ou turboalimentados. Com mais de 163.000 carros produzidos, o 944 foi o carro esporte de maior sucesso na história da Porsches até o lançamento do Boxster e do 997 Carrera. ',
            'car_preco' => '260000',
            'car_mar_codigo' => '1',
            'car_cor_codigo' => '2',
            'car_cat_codigo' => '1',
            'car_tip_codigo' => '1',
            'car_pos_codigo' => '1',
            'car_tra_codigo' => '1',
        ]);

        DB::table('tb_carros')->insertGetId([
            'car_modelo' => 'F355',
            'car_ano' => '1995',
            'car_cilindrada' => '3500',
            'car_kmrodados' => '65000',
            'car_potencia' => '340',
            'car_link_imagem' => 'https://raw.githubusercontent.com/ElderB23/Group-B-Garage/main/images_carros/355.jpg',
            'car_descrição' => 'O Ferrari F355 é um carro desportivo construído pela Ferrari entre 1994 e 1999. É uma evolução do Ferrari 348, e foi substituído pelo Ferrari 360. Seguindo a linha de sucesso dos modelos de entrada da marca, o F355 é coupé V8 de motor central e dois lugares. Uma das principais diferenças entre o V8 do 348 e do F355 foi o aumento do deslocamento de 3.4 a 3.5 litros, além do aumento no número de válvulas, passando para cinco ao total (três de admissão e duas de exaustão). E é este um dos motivos do nome "355", nos quais os dois primeiros dígitos se referem a capacidade cúbica, em litros, do motor. E o último dígito faz referência ao uso das cinco válvulas por cilindro.',
            'car_preco' => '500000',
            'car_mar_codigo' => '7',
            'car_cor_codigo' => '4',
            'car_cat_codigo' => '1',
            'car_tip_codigo' => '4',
            'car_pos_codigo' => '3',
            'car_tra_codigo' => '1',
        ]);

        DB::table('tb_carros')->insertGetId([
            'car_modelo' => 'Impreza WRX Type R',
            'car_ano' => '1998',
            'car_cilindrada' => '2000',
            'car_kmrodados' => '60000',
            'car_potencia' => '280',
            'car_link_imagem' => 'https://raw.githubusercontent.com/ElderB23/Group-B-Garage/main/images_carros/wrx.jpg',
            'car_descrição' => 'O Subaru WRX é um carro compacto esportivo com tração nas quatro rodas fabricado pela Subaru, originalmente baseado no Impreza criado para o Campeonato Mundial de Rally em 1992. Subaru afirmou que o nome WRX significa "World Rally eXperimental".',
            'car_preco' => '190000',
            'car_mar_codigo' => '12',
            'car_cor_codigo' => '3',
            'car_cat_codigo' => '1',
            'car_tip_codigo' => '7',
            'car_pos_codigo' => '1',
            'car_tra_codigo' => '3',
        ]);

        DB::table('tb_carros')->insertGetId([
            'car_modelo' => 'Delta Integrale',
            'car_ano' => '1992',
            'car_cilindrada' => '2000',
            'car_kmrodados' => '35000',
            'car_potencia' => '215',
            'car_link_imagem' => 'https://raw.githubusercontent.com/ElderB23/Group-B-Garage/main/images_carros/delta.jpg',
            'car_descrição' => 'O Delta é um automóvel hatchback compacto, produzido pela fabricante italiana Lancia, com a primeira geração sendo produzida entre 1979 e 1994, a segunda geração de 1993 a 1999, e a terceira geração a partir de 2008. Foi exibido pela primeira vez no Salão do Automóvel de Frankfurt, em 1979.[1] O Delta é mais conhecido por sua carreira no Campeonato Mundial de Rali no final de 1980 e início de 1990, quando dominava os ralis.',
            'car_preco' => '230000',
            'car_mar_codigo' => '3',
            'car_cor_codigo' => '4',
            'car_cat_codigo' => '3',
            'car_tip_codigo' => '1',
            'car_pos_codigo' => '1',
            'car_tra_codigo' => '3',
        ]);

        DB::table('tb_carros')->insertGetId([
            'car_modelo' => 'Lancer Evolution VI TME',
            'car_ano' => '1999',
            'car_cilindrada' => '2000',
            'car_kmrodados' => '65000',
            'car_potencia' => '290',
            'car_link_imagem' => 'https://raw.githubusercontent.com/ElderB23/Group-B-Garage/main/images_carros/Mitsubishi_Lancer_Evolution_VI.jpg',
            'car_descrição' => 'O Lancer Evolution, (também apelidado de Lancer Evo) é um sedan de alto desempenho baseado no Mitsubishi Lancer que foi fabricado pela Mitsubishi Motors entre 1992 e 2015. Das dez versões fabricadas, todas utilizam um motor de 2 litros, com turbo e tração nas quatro rodas. Cada versão é numerada com números romanos, mas não necessariamente sendo uma nova geração. Os modelos japoneses têm restrição de potência, para obedecer as leis locais. Já as versões disponíveis em alguns outros mercados, como por exemplo o Reino Unido, têm a potência original (sem a limitação de potência), atingindo até 450 cv. Foi 4 vezes campeão do WRC (World Raly Championship) em 1996, 1997, 1998 e 1999, e 10 vezes campeão do P-WRC (Production Car World Rally Championship), em 1995, 1996, 1997, 1998, 1999, 2000, 2001, 2008, 2009 e 2010.',
            'car_preco' => '200000',
            'car_mar_codigo' => '13',
            'car_cor_codigo' => '5',
            'car_cat_codigo' => '4',
            'car_tip_codigo' => '1',
            'car_pos_codigo' => '1',
            'car_tra_codigo' => '3',
        ]);

        DB::table('tb_carros')->insertGetId([
            'car_modelo' => 'M3 E30',
            'car_ano' => '1988',
            'car_cilindrada' => '2500',
            'car_kmrodados' => '67000',
            'car_potencia' => '230',
            'car_link_imagem' => 'https://raw.githubusercontent.com/ElderB23/Group-B-Garage/main/images_carros/https___hypebeast.com_image_2020_07_bmw-m3-e30-8k-miles-auction-collector-car-14.jpg',
            'car_descrição' => 'O BMW M3 é uma versão de alto desempenho do BMW Série 3, desenvolvido pela divisão interna de automobilismo da BMW, a BMW M GmbH. Os modelos M3 foram produzidos para cada geração da Série 3 desde que o E30 M3 foi lançado em 1986.',
            'car_preco' => '320000',
            'car_mar_codigo' => '17',
            'car_cor_codigo' => '4',
            'car_cat_codigo' => '1',
            'car_tip_codigo' => '1',
            'car_pos_codigo' => '1',
            'car_tra_codigo' => '1',
        ]);

        DB::table('tb_carros')->insertGetId([
            'car_modelo' => 'Alfetta GTV6',
            'car_ano' => '1984',
            'car_cilindrada' => '2500',
            'car_kmrodados' => '65000',
            'car_potencia' => '240',
            'car_link_imagem' => 'https://raw.githubusercontent.com/ElderB23/Group-B-Garage/main/images_carros/alfa-romeo-gtv6-1981-a1154-037.jpg',
            'car_descrição' => 'O Alfa Romeo Alfetta (Tipo 116, ou "Type 116") é um sedã de cinco passageiros e coupé fastback com motor dianteiro fabricado e comercializado pela Alfa Romeo de 1972 a 1987 com uma produção total de mais de 400.000. O Alfetta foi conhecido pela posição traseira de sua transmissão (embreagem e transmissão) e sua suspensão traseira de tubo De Dion - um arranjo projetado para otimizar o manuseio equilibrando a distribuição de peso dianteiro / traseiro, além de manter um baixo momento polar de inércia e baixo Centro de gravidade. O interior dos modelos Coupé apresentava uma localização central do tacômetro, então incomum - por si só, diretamente na frente do motorista. O nome Alfetta, que significa "pequeno Alfa" em italiano, derivado do apelido de Alfa Romeo Tipo 159 Alfetta, um carro de Fórmula 1 de sucesso que em sua última iteração (1951) combinou um layout de transmissão com suspensão traseira de tubo De Dion - como seu homônimo moderno. ',
            'car_preco' => '230000',
            'car_mar_codigo' => '9',
            'car_cor_codigo' => '4',
            'car_cat_codigo' => '3',
            'car_tip_codigo' => '3',
            'car_pos_codigo' => '1',
            'car_tra_codigo' => '1',
        ]);

        DB::table('tb_carros')->insertGetId([
            'car_modelo' => 'Fusca',
            'car_ano' => '1967',
            'car_cilindrada' => '1200',
            'car_kmrodados' => '50000',
            'car_potencia' => '40',
            'car_link_imagem' => 'https://raw.githubusercontent.com/ElderB23/Group-B-Garage/main/images_carros/fusca.jpg',
            'car_descrição' => 'O Volkswagen Type 1, popularmente conhecido como Fusca (no Brasil) ou Carocha (em Portugal), foi o primeiro modelo de automóvel fabricado pela companhia alemã Volkswagen, sendo produzido entre 1938 e 2003. Foi o carro mais vendido no mundo, ultrapassando em 1972 o recorde que pertencia até então ao Ford Modelo T, de origem estadunidense. Foi produzido até 2003, no México, onde era chamado de VW Sedan.',
            'car_preco' => '60000',
            'car_mar_codigo' => '16',
            'car_cor_codigo' => '3',
            'car_cat_codigo' => '4',
            'car_tip_codigo' => '7',
            'car_pos_codigo' => '2',
            'car_tra_codigo' => '1',
        ]);

        DB::table('tb_carros')->insertGetId([
            'car_modelo' => '500',
            'car_ano' => '1968',
            'car_cilindrada' => '600',
            'car_kmrodados' => '60000',
            'car_potencia' => '20',
            'car_link_imagem' => 'https://raw.githubusercontent.com/ElderB23/Group-B-Garage/main/images_carros/500.jpg',
            'car_descrição' => 'Fiat 500 (Cinquecento) foi um modelo de minicarro produzido pela Fiat na Italia, entre 1957 e 1975. Criado por Dante Giacosa, o carro utiliza a sigla ZFA 110 para a versão sedã e ZFA 120 para a versão Giardiniera.',
            'car_preco' => '70000',
            'car_mar_codigo' => '5',
            'car_cor_codigo' => '6',
            'car_cat_codigo' => '4',
            'car_tip_codigo' => '7',
            'car_pos_codigo' => '2',
            'car_tra_codigo' => '1',
        ]);

        DB::table('tb_carros')->insertGetId([
            'car_modelo' => 'Corvette C4',
            'car_ano' => '1988',
            'car_cilindrada' => '6000',
            'car_kmrodados' => '55000',
            'car_potencia' => '370',
            'car_link_imagem' => 'https://raw.githubusercontent.com/ElderB23/Group-B-Garage/main/images_carros/corvette1985WA7781.jpg',
            'car_descrição' => 'O Chevrolet Corvette, coloquialmente conhecido como Vette, é um carro esportivo de luxo para dois passageiros fabricado e comercializado pela Chevrolet em mais de 60 anos de produção e oito gerações de design. De 1953 a 2019, foi com motor dianteiro e, desde 2020, com motor central. Com suas gerações observadas sequencialmente de C1 a C8, o Corvette funciona como o veículo halo da Chevrolet e é conhecido por seu desempenho e carroceria de plástico distinta, seja de fibra de vidro ou composto. ',
            'car_preco' => '300000',
            'car_mar_codigo' => '10',
            'car_cor_codigo' => '2',
            'car_cat_codigo' => '1',
            'car_tip_codigo' => '4',
            'car_pos_codigo' => '1',
            'car_tra_codigo' => '1',
        ]);

        DB::table('tb_carros')->insertGetId([
            'car_modelo' => '190E Cosworth',
            'car_ano' => '1988',
            'car_cilindrada' => '3500',
            'car_kmrodados' => '47000',
            'car_potencia' => '320',
            'car_link_imagem' => 'https://raw.githubusercontent.com/ElderB23/Group-B-Garage/main/images_carros/mercedes-benz-190-e-23-16_cosworth_1_925x520_acf_cropped.jpg',
            'car_descrição' => 'O Mercedes-Benz W201 foi a designação interna para os sedãs da série 190 da Mercedes, uma variedade de carros com motor dianteiro, tração traseira, cinco passageiros e quatro portas fabricados em uma única geração, de 1982 a 1993 como o primeiro automóvel compacto da empresa . Desenhado por Bruno Sacco, chefe de estilismo da Mercedes-Benz de 1975 a 1999, o W201 estreou no Salão Automóvel de Paris de 1982. Fabricado em Bremen e Sindelfingen, Alemanha, a produção atingiu 1.879.629 ao longo de sua vida de modelo de onze anos.',
            'car_preco' => '320000',
            'car_mar_codigo' => '18',
            'car_cor_codigo' => '2',
            'car_cat_codigo' => '4',
            'car_tip_codigo' => '1',
            'car_pos_codigo' => '1',
            'car_tra_codigo' => '1',
        ]);

        DB::table('tb_carros')->insertGetId([
            'car_modelo' => 'RX-7 FC',
            'car_ano' => '1990',
            'car_cilindrada' => '1300',
            'car_kmrodados' => '60000',
            'car_potencia' => '250',
            'car_link_imagem' => 'https://raw.githubusercontent.com/ElderB23/Group-B-Garage/main/images_carros/fc.jpg',
            'car_descrição' => 'O Mazda RX-7 é um automóvel desportivo produzido pela empresa japonesa Mazda entre 1978 e 2002. Possui tração traseira e motor de até 280 cavalos de potência. Apesar de a Mazda ter parado de fabricá-lo, ainda é possível vê-lo em alguns salões de automóveis, jogos eletrônicos (como Need for Speed) e é frequentemente visto nas ruas do Japão. Três modelos foram produzidos: SA/FB, FC3S e o mais famoso, FD3S. É um dos poucos carros a empregar o motor rotativo Wankel, que dispensa os tradicionais pistões, árvores de cames, cambota, etc. Este tipo de motor tem muito menos componentes, mas possui uma potência específica superior. No entanto, tem a desvantagem do elevado desgaste, elevado consumo e pouco binário em baixas rotações. Foi um dos esportivos asiáticos de maior prestígio',
            'car_preco' => '190000',
            'car_mar_codigo' => '4',
            'car_cor_codigo' => '5',
            'car_cat_codigo' => '1',
            'car_tip_codigo' => '11',
            'car_pos_codigo' => '1',
            'car_tra_codigo' => '1',
        ]);

        DB::table('tb_carros')->insertGetId([
            'car_modelo' => 'Mustang GT',
            'car_ano' => '1965',
            'car_cilindrada' => '4000',
            'car_kmrodados' => '80000',
            'car_potencia' => '260',
            'car_link_imagem' => 'https://raw.githubusercontent.com/ElderB23/Group-B-Garage/main/images_carros/1965-ford-mustang-coupe.jpeg',
            'car_descrição' => 'O Ford Mustang é uma série de automóveis americanos fabricados pela Ford. Em produção contínua desde 1964, o Mustang é atualmente a placa de identificação de carro da Ford mais longa. Atualmente em sua sexta geração, é o quinto carro da Ford mais vendido. Homônimo do segmento de automóveis "pony car", o Mustang foi desenvolvido como uma linha altamente estilizada de cupês e conversíveis esportivos derivados das linhas de modelos existentes, inicialmente diferenciados por proporções de "capô longo e deck curto".',
            'car_preco' => '250000',
            'car_mar_codigo' => '15',
            'car_cor_codigo' => '5',
            'car_cat_codigo' => '1',
            'car_tip_codigo' => '4',
            'car_pos_codigo' => '1',
            'car_tra_codigo' => '1',
        ]);

        DB::table('tb_carros')->insertGetId([
            'car_modelo' => 'Esprit',
            'car_ano' => '1987',
            'car_cilindrada' => '4000',
            'car_kmrodados' => '65000',
            'car_potencia' => '360',
            'car_link_imagem' => 'https://raw.githubusercontent.com/ElderB23/Group-B-Garage/main/images_carros/sprit.jpg',
            'car_descrição' => 'O Lotus Esprit é um carro esportivo britânico que foi construído pela Lotus Cars em sua fábrica Hethel na Inglaterra entre 1976 e 2004. Foi um dos primeiros designs poligonais de "papel dobrado" do designer Giorgetto Giugiaro. ',
            'car_preco' => '400000',
            'car_mar_codigo' => '8',
            'car_cor_codigo' => '5',
            'car_cat_codigo' => '1',
            'car_tip_codigo' => '4',
            'car_pos_codigo' => '3',
            'car_tra_codigo' => '1',
        ]);

        DB::table('tb_carros')->insertGetId([
            'car_modelo' => 'Corolla Levin AE86',
            'car_ano' => '1985',
            'car_cilindrada' => '1500',
            'car_kmrodados' => '80000',
            'car_potencia' => '150',
            'car_link_imagem' => 'https://raw.githubusercontent.com/ElderB23/Group-B-Garage/main/images_carros/ae86.jpg',
            'car_descrição' => 'O AE86 é a geração do Corolla Levin e Sprinter Trueno, é um pequeno e leve coupe introduzido pela Toyota em 1983 como parte da quinta geração de linha do Corolla. Para efeitos de concisão, o chassi do código de informação privilegiada AE86 é usado para descrever toda a gama. No código da Toyota, o A representa o mecanismo que veio no carro (o 3A e 4A) e o E86 representa a revisão 6 da quinta geração (E80 série) do modelo E que é o Corolla. A diferença visual entre os Levin e Trueno é que o Levin tem faróis fixos e que o Trueno tem faróis retrateis. A exportação do modelo abrange muito nas variações de nomes, as vezes é modificado para Corolla GT-S. O AE86 (juntamente com o menor spec 1.452 em centímetros cúbicos (1,452 L) AE85 e versões SR5 1587 cc) são de tração às rodas traseiras (ao contrário do dianteiro CE80, EE80 e modelos AE82), e está entre os últimos carros com tração traseira de seu tipo, num momento em que a maioria dos carros de passageiros estavam sendo mudado para tração dianteira. Em 1987 houve uma variante limitada do AE86 chamado Black Limited até que a unidade funciona também para fora e substituído em 1987 pelo traçado dianteiro do Corolla AE92 Sprinter Trueno. No Japão, o AE86 é até hoje conhecido como Hachi-Roku (ハチロク), que em japonês significa oito e seis.',
            'car_preco' => '180000',
            'car_mar_codigo' => '6',
            'car_cor_codigo' => '2',
            'car_cat_codigo' => '3',
            'car_tip_codigo' => '1',
            'car_pos_codigo' => '1',
            'car_tra_codigo' => '1',
        ]);

        DB::table('tb_carros')->insertGetId([
            'car_modelo' => 'Firebird',
            'car_ano' => '1987',
            'car_cilindrada' => '5000',
            'car_kmrodados' => '80000',
            'car_potencia' => '260',
            'car_link_imagem' => 'https://raw.githubusercontent.com/ElderB23/Group-B-Garage/main/images_carros/pontiac-firebird-trans-am-gta-5-7-v8.jpg',
            'car_descrição' => 'O Pontiac Firebird é um automóvel americano que foi construído e produzido pela Pontiac nos anos modelo de 1967 a 2002. Projetado como um carro compacto para competir com o Ford Mustang, foi lançado em 23 de fevereiro de 1967, cinco meses após o Camaro de compartilhamento de plataforma da divisão Chevrolet da GM. [1] Isso também coincidiu com o lançamento do Mercury Cougar 1967, a versão sofisticada da Ford com compartilhamento de plataforma do Mustang.',
            'car_preco' => '180000',
            'car_mar_codigo' => '19',
            'car_cor_codigo' => '4',
            'car_cat_codigo' => '1',
            'car_tip_codigo' => '4',
            'car_pos_codigo' => '1',
            'car_tra_codigo' => '1',
        ]);

        
    }
}
