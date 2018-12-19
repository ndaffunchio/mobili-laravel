<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Catre Napper',
                'slug' => 'catre-napper',
                'description' => 'Cama estilo oriental, de diseño funcional, con combinación en texturas y espesor de materiales. Amplios cajones de guardado, todos con correderas metálicas. También cuenta con un sector tipo baulera para guardado de cajas, valijas o bolsas. Una línea concebida con un diseño actual, minimalista, con colores clásicos y un aspecto moderno a la vez. Súper resistente gracias a su estructura reforzada, soportando más de 400 kg. Fácil de transportar y con las medidas ideales.',
                'price' => '13000',
                'picture' => 'assets/img/deseados/deseados-3.jpg',
                'category_id' => '4',
                'featured' => true
            ],
            [
                'name' => 'Sillón Byron',
                'slug' => 'sillon-byron',
                'description' => 'Esta exquisita reproducción del clásico icónico moderno es ideal para los amantes de lo retro. Admire la estética y aprecie cómo sin esfuerzo la forma y el flujo se combinan en igual proporción. Un diseño creado por Mobili donde menos es más, terminado con los más finos detalles y pensado para múltiples espacios. Desde el living de tu hogar, hasta una oficina moderna.',
                'price' => '8500',
                'picture' => 'assets/img/deseados/deseados-4.jpg',
                'category_id' => '6',
                'featured' => true
            ],
            [
                'name' => 'Banquito Eco',
                'slug' => 'banquito-eco',
                'description' => 'Banco moderno, elegante y de diseño. El más vendido del mercado. Fácil de limpiar y con antideslizante en la base. Fabricado con materiales de primera calidad. Súper cómodo y de alta resistencia, soporta hasta 100 kg. De fácil transporte y gran durabilidad.',
                'price' => '5350',
                'picture' => 'assets/img/deseados/deseados-5.jpg',
                'category_id' => '5',
                'featured' => true
            ],
            [
                'name' => 'New York Violet Dining Arm Chair',
                'slug' => 'new-york-violet-dining-arm-chair',
                'description' => 'Este clásico del diseño ha sido utilizado en cafeterías y cocinas retro de todo el mundo, pero es combinable con multitud de estilos y tendencias decorativas. En la década de los 70 se utilizaban a menudo en fábricas, oficinas u hospitales. Hoy se ha impuesto como un diseño de moda ideal para multiples ambientes.',
                'price' => '10200',
                'picture' => 'assets/img/deseados/deseados-2.jpg',
                'category_id' => '3',
                'featured' => true
            ],
            [
                'name' => 'St. Charles Desk',
                'slug' => 'st-charles-desk',
                'description' => 'Su increíble diseño le brinda la posibilidad de poder organizar todos sus elementos de trabajo y/o estudio. Ideal para colocar en cualquier rincón del hogar. Dispone de un sistema de almacenamiento útil y práctico para cualquier tipo de ambientes (living, oficina, dormitorio, playroom, etc.). No sólo es útil sino también de fácil limpieza. Este escritorio puede utilizarse para trabajar con la notebook, leer, estudiar o como mesa auxiliar ya que tiene unas medidas que se adaptan a cualquier rincón del hogar.',
                'price' => '11750',
                'picture' => 'assets/img/deseados/deseados-1.jpg',
                'category_id' => '2',
                'featured' => true
            ],
            [
                'name' => 'Sillón Amore Mio',
                'slug' => 'sillon-amore-mio',
                'description' => 'Esta exquisita reproducción del clásico icónico moderno es ideal para los amantes de lo retro. Admire la estética y aprecie cómo sin esfuerzo la forma y el flujo se combinan en igual proporción. Un diseño creado por Mobili donde menos es más, terminado con los más finos detalles y pensado para múltiples espacios. Desde el living de tu hogar, hasta una oficina moderna.',
                'price' => '16380',
                'picture' => 'assets/img/deseados/deseados-6.jpg',
                'category_id' => '6',
                'featured' => true
            ],
            [
                'name' => 'Sillón Begonia Brown',
                'slug' => 'sillon-begonia-brown',
                'description' => 'Esta exquisita reproducción del clásico icónico moderno es ideal para los amantes de lo retro. Admire la estética y aprecie cómo sin esfuerzo la forma y el flujo se combinan en igual proporción. Un diseño creado por Mobili donde menos es más, terminado con los más finos detalles y pensado para múltiples espacios. Desde el living de tu hogar, hasta una oficina moderna.',
                'price' => '18990',
                'picture' => 'assets/img/deseados/sillones-2.jpg',
                'category_id' => '6',
                'featured' => true
            ],
            [
                'name' => 'Sillón Begonia Gray',
                'slug' => 'sillon-begonia-gray',
                'description' => 'Esta exquisita reproducción del clásico icónico moderno es ideal para los amantes de lo retro. Admire la estética y aprecie cómo sin esfuerzo la forma y el flujo se combinan en igual proporción. Un diseño creado por Mobili donde menos es más, terminado con los más finos detalles y pensado para múltiples espacios. Desde el living de tu hogar, hasta una oficina moderna.',
                'price' => '18990',
                'picture' => 'assets/img/deseados/sillones-3.jpg',
                'category_id' => '6',
                'featured' => true
            ],
            [
                'name' => 'Sillón Fiona',
                'slug' => 'sillon-fiona',
                'description' => 'Esta exquisita reproducción del clásico icónico moderno es ideal para los amantes de lo retro. Admire la estética y aprecie cómo sin esfuerzo la forma y el flujo se combinan en igual proporción. Un diseño creado por Mobili donde menos es más, terminado con los más finos detalles y pensado para múltiples espacios. Desde el living de tu hogar, hasta una oficina moderna.',
                'price' => '23990',
                'picture' => 'assets/img/deseados/sillones-4.jpg',
                'category_id' => '6',
                'featured' => true
            ],
            [
                'name' => 'Sillón Marina Orange',
                'slug' => 'sillon-marina-orange',
                'description' => 'Esta exquisita reproducción del clásico icónico moderno es ideal para los amantes de lo retro. Admire la estética y aprecie cómo sin esfuerzo la forma y el flujo se combinan en igual proporción. Un diseño creado por Mobili donde menos es más, terminado con los más finos detalles y pensado para múltiples espacios. Desde el living de tu hogar, hasta una oficina moderna.',
                'price' => '32490',
                'picture' => 'assets/img/deseados/sillones-5.jpg',
                'category_id' => '6',
                'featured' => true
            ],
            [
                'name' => 'Sillón Rihanna Gray',
                'slug' => 'sillon-rihanna-gray',
                'description' => 'Esta exquisita reproducción del clásico icónico moderno es ideal para los amantes de lo retro. Admire la estética y aprecie cómo sin esfuerzo la forma y el flujo se combinan en igual proporción. Un diseño creado por Mobili donde menos es más, terminado con los más finos detalles y pensado para múltiples espacios. Desde el living de tu hogar, hasta una oficina moderna.',
                'price' => '21990',
                'picture' => 'assets/img/deseados/sillones-6.jpg',
                'category_id' => '6',
                'featured' => true
            ],
            [
                'name' => 'Sillón Rihanna Blue',
                'slug' => 'sillon-rihanna-blue',
                'description' => 'Esta exquisita reproducción del clásico icónico moderno es ideal para los amantes de lo retro. Admire la estética y aprecie cómo sin esfuerzo la forma y el flujo se combinan en igual proporción. Un diseño creado por Mobili donde menos es más, terminado con los más finos detalles y pensado para múltiples espacios. Desde el living de tu hogar, hasta una oficina moderna.',
                'price' => '21990',
                'picture' => 'assets/img/deseados/sillones-7.jpg',
                'category_id' => '6',
                'featured' => true
            ],
            [
                'name' => 'Sillón Rihanna White',
                'slug' => 'sillon-rihanna-white',
                'description' => 'Esta exquisita reproducción del clásico icónico moderno es ideal para los amantes de lo retro. Admire la estética y aprecie cómo sin esfuerzo la forma y el flujo se combinan en igual proporción. Un diseño creado por Mobili donde menos es más, terminado con los más finos detalles y pensado para múltiples espacios. Desde el living de tu hogar, hasta una oficina moderna.',
                'price' => '21990',
                'picture' => 'assets/img/deseados/sillones-8.jpg',
                'category_id' => '6',
                'featured' => false
            ],
            [
                'name' => 'Sillón Sakura White',
                'slug' => 'sillon-sakura-white',
                'description' => 'Esta exquisita reproducción del clásico icónico moderno es ideal para los amantes de lo retro. Admire la estética y aprecie cómo sin esfuerzo la forma y el flujo se combinan en igual proporción. Un diseño creado por Mobili donde menos es más, terminado con los más finos detalles y pensado para múltiples espacios. Desde el living de tu hogar, hasta una oficina moderna.',
                'price' => '18990',
                'picture' => 'assets/img/deseados/sillones-9.jpg',
                'category_id' => '6',
                'featured' => false
            ],
            [
                'name' => 'Mesa América',
                'slug' => 'mesa-america',
                'description' => 'Diseño y calidad en una marca: Basement. Impone el límite de la moda con sus colecciones, ofreciendo siempre a sus clientes lo último en elegancia urbana. Fresco, moderno y con acabados únicos, lo mejor en tendencias lo encontrás acá.',
                'price' => '4200',
                'picture' => 'assets/img/deseados/mesas-1.jpg',
                'category_id' => '1',
                'featured' => false
            ],
            [
                'name' => 'Mesa Florencia',
                'slug' => 'mesa-florencia',
                'description' => 'Diseño y calidad en una marca: Basement. Impone el límite de la moda con sus colecciones, ofreciendo siempre a sus clientes lo último en elegancia urbana. Fresco, moderno y con acabados únicos, lo mejor en tendencias lo encontrás acá.',
                'price' => '6100',
                'picture' => 'assets/img/deseados/mesas-2.jpg',
                'category_id' => '1',
                'featured' => false
            ],
            [
                'name' => 'Mesa Kretes',
                'slug' => 'mesa-kretes',
                'description' => 'Diseño y calidad en una marca: Basement. Impone el límite de la moda con sus colecciones, ofreciendo siempre a sus clientes lo último en elegancia urbana. Fresco, moderno y con acabados únicos, lo mejor en tendencias lo encontrás acá.',
                'price' => '14440',
                'picture' => 'assets/img/deseados/mesas-3.jpg',
                'category_id' => '1',
                'featured' => false
            ],
            [
                'name' => 'Mesa One',
                'slug' => 'mesa-one',
                'description' => 'Diseño y calidad en una marca: Basement. Impone el límite de la moda con sus colecciones, ofreciendo siempre a sus clientes lo último en elegancia urbana. Fresco, moderno y con acabados únicos, lo mejor en tendencias lo encontrás acá.',
                'price' => '7200',
                'picture' => 'assets/img/deseados/mesas-4.jpg',
                'category_id' => '1',
                'featured' => false
            ],
            [
                'name' => 'Mesa Marbella',
                'slug' => 'mesa-marbella',
                'description' => 'Diseño y calidad en una marca: Basement. Impone el límite de la moda con sus colecciones, ofreciendo siempre a sus clientes lo último en elegancia urbana. Fresco, moderno y con acabados únicos, lo mejor en tendencias lo encontrás acá.',
                'price' => '9200',
                'picture' => 'assets/img/deseados/mesas-5.jpg',
                'category_id' => '1',
                'featured' => false
            ],
            [
                'name' => 'Mesa Mérida',
                'slug' => 'mesa-merida',
                'description' => 'Diseño y calidad en una marca: Basement. Impone el límite de la moda con sus colecciones, ofreciendo siempre a sus clientes lo último en elegancia urbana. Fresco, moderno y con acabados únicos, lo mejor en tendencias lo encontrás acá.',
                'price' => '20600',
                'picture' => 'assets/img/deseados/mesas-6.jpg',
                'category_id' => '1',
                'featured' => false
            ],
            [
                'name' => 'Mesa Mirage',
                'slug' => 'mesa-mirage',
                'description' => 'Diseño y calidad en una marca: Basement. Impone el límite de la moda con sus colecciones, ofreciendo siempre a sus clientes lo último en elegancia urbana. Fresco, moderno y con acabados únicos, lo mejor en tendencias lo encontrás acá.',
                'price' => '2370',
                'picture' => 'assets/img/deseados/mesas-7.jpg',
                'category_id' => '1',
                'featured' => false
            ],
            [
                'name' => 'Mesa 2002',
                'slug' => 'mesa-2002',
                'description' => 'Diseño y calidad en una marca: Basement. Impone el límite de la moda con sus colecciones, ofreciendo siempre a sus clientes lo último en elegancia urbana. Fresco, moderno y con acabados únicos, lo mejor en tendencias lo encontrás acá.',
                'price' => '2350',
                'picture' => 'assets/img/deseados/mesas-8.jpg',
                'category_id' => '1',
                'featured' => false
            ],
            [
                'name' => 'Mesa Arrow',
                'slug' => 'mesa-arrow',
                'description' => 'Diseño y calidad en una marca: Basement. Impone el límite de la moda con sus colecciones, ofreciendo siempre a sus clientes lo último en elegancia urbana. Fresco, moderno y con acabados únicos, lo mejor en tendencias lo encontrás acá.',
                'price' => '4500',
                'picture' => 'assets/img/deseados/mesas-9.jpg',
                'category_id' => '1',
                'featured' => false
            ],
            [
                'name' => 'Mesa Vigor',
                'slug' => 'mesa-vigor',
                'description' => 'Diseño y calidad en una marca: Basement. Impone el límite de la moda con sus colecciones, ofreciendo siempre a sus clientes lo último en elegancia urbana. Fresco, moderno y con acabados únicos, lo mejor en tendencias lo encontrás acá.',
                'price' => '7260',
                'picture' => 'assets/img/deseados/mesas-10.jpg',
                'category_id' => '1',
                'featured' => false
            ],
            [
                'name' => 'Escritorio 3024',
                'slug' => 'escritorio-3024',
                'description' => 'Su increíble diseño le brinda la posibilidad de poder organizar todos sus elementos de trabajo y/o estudio. Ideal para colocar en cualquier rincón del hogar. Dispone de un sistema de almacenamiento útil y práctico para cualquier tipo de ambientes (living, oficina, dormitorio, playroom, etc.). No sólo es útil sino también de fácil limpieza. Este escritorio puede utilizarse para trabajar con la notebook, leer, estudiar o como mesa auxiliar ya que tiene unas medidas que se adaptan a cualquier rincón del hogar.',
                'price' => '4250',
                'picture' => 'assets/img/deseados/escritorios-1.jpg',
                'category_id' => '2',
                'featured' => false
            ],
            [
                'name' => 'Escritorio 3025 White',
                'slug' => 'escritorio-3025-white',
                'description' => 'Su increíble diseño le brinda la posibilidad de poder organizar todos sus elementos de trabajo y/o estudio. Ideal para colocar en cualquier rincón del hogar. Dispone de un sistema de almacenamiento útil y práctico para cualquier tipo de ambientes (living, oficina, dormitorio, playroom, etc.). No sólo es útil sino también de fácil limpieza. Este escritorio puede utilizarse para trabajar con la notebook, leer, estudiar o como mesa auxiliar ya que tiene unas medidas que se adaptan a cualquier rincón del hogar.',
                'price' => '4760',
                'picture' => 'assets/img/deseados/escritorios-2.jpg',
                'category_id' => '2',
                'featured' => false
            ],
            [
                'name' => 'Escritorio 3025 WH',
                'slug' => 'escritorio-3025-wh',
                'description' => 'Su increíble diseño le brinda la posibilidad de poder organizar todos sus elementos de trabajo y/o estudio. Ideal para colocar en cualquier rincón del hogar. Dispone de un sistema de almacenamiento útil y práctico para cualquier tipo de ambientes (living, oficina, dormitorio, playroom, etc.). No sólo es útil sino también de fácil limpieza. Este escritorio puede utilizarse para trabajar con la notebook, leer, estudiar o como mesa auxiliar ya que tiene unas medidas que se adaptan a cualquier rincón del hogar.',
                'price' => '4760',
                'picture' => 'assets/img/deseados/escritorios-3.jpg',
                'category_id' => '2',
                'featured' => false
            ],
            [
                'name' => 'Escritorio 3042',
                'slug' => 'escritorio-3042',
                'description' => 'Su increíble diseño le brinda la posibilidad de poder organizar todos sus elementos de trabajo y/o estudio. Ideal para colocar en cualquier rincón del hogar. Dispone de un sistema de almacenamiento útil y práctico para cualquier tipo de ambientes (living, oficina, dormitorio, playroom, etc.). No sólo es útil sino también de fácil limpieza. Este escritorio puede utilizarse para trabajar con la notebook, leer, estudiar o como mesa auxiliar ya que tiene unas medidas que se adaptan a cualquier rincón del hogar.',
                'price' => '2650',
                'picture' => 'assets/img/deseados/escritorios-4.jpg',
                'category_id' => '2',
                'featured' => false
            ],
            [
                'name' => 'Escritorio 3042 WH',
                'slug' => 'escritorio-3042-wh',
                'description' => 'Su increíble diseño le brinda la posibilidad de poder organizar todos sus elementos de trabajo y/o estudio. Ideal para colocar en cualquier rincón del hogar. Dispone de un sistema de almacenamiento útil y práctico para cualquier tipo de ambientes (living, oficina, dormitorio, playroom, etc.). No sólo es útil sino también de fácil limpieza. Este escritorio puede utilizarse para trabajar con la notebook, leer, estudiar o como mesa auxiliar ya que tiene unas medidas que se adaptan a cualquier rincón del hogar.',
                'price' => '2650',
                'picture' => 'assets/img/deseados/escritorios-5.jpg',
                'category_id' => '2',
                'featured' => false
            ],
            [
                'name' => 'Escritorio 3043 WH',
                'slug' => 'escritorio-3043-wh',
                'description' => 'Su increíble diseño le brinda la posibilidad de poder organizar todos sus elementos de trabajo y/o estudio. Ideal para colocar en cualquier rincón del hogar. Dispone de un sistema de almacenamiento útil y práctico para cualquier tipo de ambientes (living, oficina, dormitorio, playroom, etc.). No sólo es útil sino también de fácil limpieza. Este escritorio puede utilizarse para trabajar con la notebook, leer, estudiar o como mesa auxiliar ya que tiene unas medidas que se adaptan a cualquier rincón del hogar.',
                'price' => '3870',
                'picture' => 'assets/img/deseados/escritorios-6.jpg',
                'category_id' => '2',
                'featured' => false
            ],
            [
                'name' => 'Escritorio SC109',
                'slug' => 'escritorio-sc109',
                'description' => 'Su increíble diseño le brinda la posibilidad de poder organizar todos sus elementos de trabajo y/o estudio. Ideal para colocar en cualquier rincón del hogar. Dispone de un sistema de almacenamiento útil y práctico para cualquier tipo de ambientes (living, oficina, dormitorio, playroom, etc.). No sólo es útil sino también de fácil limpieza. Este escritorio puede utilizarse para trabajar con la notebook, leer, estudiar o como mesa auxiliar ya que tiene unas medidas que se adaptan a cualquier rincón del hogar.',
                'price' => '2400',
                'picture' => 'assets/img/deseados/escritorios-7.jpg',
                'category_id' => '2',
                'featured' => false
            ],
            [
                'name' => 'Escritorio SC1250',
                'slug' => 'escritorio-sc1250',
                'description' => 'Su increíble diseño le brinda la posibilidad de poder organizar todos sus elementos de trabajo y/o estudio. Ideal para colocar en cualquier rincón del hogar. Dispone de un sistema de almacenamiento útil y práctico para cualquier tipo de ambientes (living, oficina, dormitorio, playroom, etc.). No sólo es útil sino también de fácil limpieza. Este escritorio puede utilizarse para trabajar con la notebook, leer, estudiar o como mesa auxiliar ya que tiene unas medidas que se adaptan a cualquier rincón del hogar.',
                'price' => '2980',
                'picture' => 'assets/img/deseados/escritorios-8.jpg',
                'category_id' => '2',
                'featured' => false
            ],
            [
                'name' => 'Escritorio Vintage',
                'slug' => 'escritorio-vintage',
                'description' => 'Su increíble diseño le brinda la posibilidad de poder organizar todos sus elementos de trabajo y/o estudio. Ideal para colocar en cualquier rincón del hogar. Dispone de un sistema de almacenamiento útil y práctico para cualquier tipo de ambientes (living, oficina, dormitorio, playroom, etc.). No sólo es útil sino también de fácil limpieza. Este escritorio puede utilizarse para trabajar con la notebook, leer, estudiar o como mesa auxiliar ya que tiene unas medidas que se adaptan a cualquier rincón del hogar.',
                'price' => '12890',
                'picture' => 'assets/img/deseados/escritorios-9.jpg',
                'category_id' => '2',
                'featured' => false
            ],
            [
                'name' => 'Silla Arrow White',
                'slug' => 'silla-arrow-white',
                'description' => 'Este clásico del diseño ha sido utilizado en cafeterías y cocinas retro de todo el mundo, pero es combinable con multitud de estilos y tendencias decorativas. En la década de los 70 se utilizaban a menudo en fábricas, oficinas u hospitales. Hoy se ha impuesto como un diseño de moda ideal para multiples ambientes.',
                'price' => '3150',
                'picture' => 'assets/img/deseados/sillas-1.jpg',
                'category_id' => '3',
                'featured' => false
            ],
            [
                'name' => 'Silla Houston Classic',
                'slug' => 'silla-houston-classic',
                'description' => 'Este clásico del diseño ha sido utilizado en cafeterías y cocinas retro de todo el mundo, pero es combinable con multitud de estilos y tendencias decorativas. En la década de los 70 se utilizaban a menudo en fábricas, oficinas u hospitales. Hoy se ha impuesto como un diseño de moda ideal para multiples ambientes.',
                'price' => '5490',
                'picture' => 'assets/img/deseados/sillas-2.jpg',
                'category_id' => '3',
                'featured' => false
            ],
            [
                'name' => 'Silla Houston Brown',
                'slug' => 'silla-houston-brown',
                'description' => 'Este clásico del diseño ha sido utilizado en cafeterías y cocinas retro de todo el mundo, pero es combinable con multitud de estilos y tendencias decorativas. En la década de los 70 se utilizaban a menudo en fábricas, oficinas u hospitales. Hoy se ha impuesto como un diseño de moda ideal para multiples ambientes.',
                'price' => '5490',
                'picture' => 'assets/img/deseados/sillas-3.jpg',
                'category_id' => '3',
                'featured' => false
            ],
            [
                'name' => 'Silla Linear',
                'slug' => 'silla-linear',
                'description' => 'Este clásico del diseño ha sido utilizado en cafeterías y cocinas retro de todo el mundo, pero es combinable con multitud de estilos y tendencias decorativas. En la década de los 70 se utilizaban a menudo en fábricas, oficinas u hospitales. Hoy se ha impuesto como un diseño de moda ideal para multiples ambientes.',
                'price' => '3690',
                'picture' => 'assets/img/deseados/sillas-4.jpg',
                'category_id' => '3',
                'featured' => false
            ],
            [
                'name' => 'Silla Linear White',
                'slug' => 'silla-linear-white',
                'description' => 'Este clásico del diseño ha sido utilizado en cafeterías y cocinas retro de todo el mundo, pero es combinable con multitud de estilos y tendencias decorativas. En la década de los 70 se utilizaban a menudo en fábricas, oficinas u hospitales. Hoy se ha impuesto como un diseño de moda ideal para multiples ambientes.',
                'price' => '3690',
                'picture' => 'assets/img/deseados/sillas-5.jpg',
                'category_id' => '3',
                'featured' => false
            ],
            [
                'name' => 'Silla Positano Gray',
                'slug' => 'silla-positano-gray',
                'description' => 'Este clásico del diseño ha sido utilizado en cafeterías y cocinas retro de todo el mundo, pero es combinable con multitud de estilos y tendencias decorativas. En la década de los 70 se utilizaban a menudo en fábricas, oficinas u hospitales. Hoy se ha impuesto como un diseño de moda ideal para multiples ambientes.',
                'price' => '5460',
                'picture' => 'assets/img/deseados/sillas-6.jpg',
                'category_id' => '3',
                'featured' => false
            ],
            [
                'name' => 'Silla Positano',
                'slug' => 'silla-positano',
                'description' => 'Este clásico del diseño ha sido utilizado en cafeterías y cocinas retro de todo el mundo, pero es combinable con multitud de estilos y tendencias decorativas. En la década de los 70 se utilizaban a menudo en fábricas, oficinas u hospitales. Hoy se ha impuesto como un diseño de moda ideal para multiples ambientes.',
                'price' => '5460',
                'picture' => 'assets/img/deseados/sillas-7.jpg',
                'category_id' => '3',
                'featured' => false
            ],
            [
                'name' => 'Silla Verona',
                'slug' => 'silla-verona',
                'description' => 'Este clásico del diseño ha sido utilizado en cafeterías y cocinas retro de todo el mundo, pero es combinable con multitud de estilos y tendencias decorativas. En la década de los 70 se utilizaban a menudo en fábricas, oficinas u hospitales. Hoy se ha impuesto como un diseño de moda ideal para multiples ambientes.',
                'price' => '5440',
                'picture' => 'assets/img/deseados/sillas-8.jpg',
                'category_id' => '3',
                'featured' => false
            ],
            [
                'name' => 'Silla Verona Brown',
                'slug' => 'silla-verona-brown',
                'description' => 'Este clásico del diseño ha sido utilizado en cafeterías y cocinas retro de todo el mundo, pero es combinable con multitud de estilos y tendencias decorativas. En la década de los 70 se utilizaban a menudo en fábricas, oficinas u hospitales. Hoy se ha impuesto como un diseño de moda ideal para multiples ambientes.',
                'price' => '5440',
                'picture' => 'assets/img/deseados/sillas-9.jpg',
                'category_id' => '3',
                'featured' => false
            ],
            [
                'name' => 'Cama América',
                'slug' => 'cama-america',
                'description' => 'Cama estilo oriental, de diseño funcional, con combinación en texturas y espesor de materiales. Amplios cajones de guardado, todos con correderas metálicas. También cuenta con un sector tipo baulera para guardado de cajas, valijas o bolsas. Una línea concebida con un diseño actual, minimalista, con colores clásicos y un aspecto moderno a la vez. Súper resistente gracias a su estructura reforzada, soportando más de 400 kg. Fácil de transportar y con las medidas ideales.',
                'price' => '24400',
                'picture' => 'assets/img/deseados/camas-1.jpg',
                'category_id' => '4',
                'featured' => false
            ],
            [
                'name' => 'Cama Bel Bed',
                'slug' => 'cama-bel-bed',
                'description' => 'Cama estilo oriental, de diseño funcional, con combinación en texturas y espesor de materiales. Amplios cajones de guardado, todos con correderas metálicas. También cuenta con un sector tipo baulera para guardado de cajas, valijas o bolsas. Una línea concebida con un diseño actual, minimalista, con colores clásicos y un aspecto moderno a la vez. Súper resistente gracias a su estructura reforzada, soportando más de 400 kg. Fácil de transportar y con las medidas ideales.',
                'price' => '16500',
                'picture' => 'assets/img/deseados/camas-2.jpg',
                'category_id' => '4',
                'featured' => false
            ],
            [
                'name' => 'Cama Belmo',
                'slug' => 'cama-belmo',
                'description' => 'Cama estilo oriental, de diseño funcional, con combinación en texturas y espesor de materiales. Amplios cajones de guardado, todos con correderas metálicas. También cuenta con un sector tipo baulera para guardado de cajas, valijas o bolsas. Una línea concebida con un diseño actual, minimalista, con colores clásicos y un aspecto moderno a la vez. Súper resistente gracias a su estructura reforzada, soportando más de 400 kg. Fácil de transportar y con las medidas ideales.',
                'price' => '24000',
                'picture' => 'assets/img/deseados/camas-3.jpg',
                'category_id' => '4',
                'featured' => false
            ],
            [
                'name' => 'Cama Europea Balance',
                'slug' => 'cama-europea-balance',
                'description' => 'Cama estilo oriental, de diseño funcional, con combinación en texturas y espesor de materiales. Amplios cajones de guardado, todos con correderas metálicas. También cuenta con un sector tipo baulera para guardado de cajas, valijas o bolsas. Una línea concebida con un diseño actual, minimalista, con colores clásicos y un aspecto moderno a la vez. Súper resistente gracias a su estructura reforzada, soportando más de 400 kg. Fácil de transportar y con las medidas ideales.',
                'price' => '28900',
                'picture' => 'assets/img/deseados/camas-4.jpg',
                'category_id' => '4',
                'featured' => false
            ],
            [
                'name' => 'Cama Europea Essence',
                'slug' => 'cama-europea-essence',
                'description' => 'Cama estilo oriental, de diseño funcional, con combinación en texturas y espesor de materiales. Amplios cajones de guardado, todos con correderas metálicas. También cuenta con un sector tipo baulera para guardado de cajas, valijas o bolsas. Una línea concebida con un diseño actual, minimalista, con colores clásicos y un aspecto moderno a la vez. Súper resistente gracias a su estructura reforzada, soportando más de 400 kg. Fácil de transportar y con las medidas ideales.',
                'price' => '21000',
                'picture' => 'assets/img/deseados/camas-5.jpg',
                'category_id' => '4',
                'featured' => false
            ],
            [
                'name' => 'Cama Juvenil',
                'slug' => 'cama-juvenil',
                'description' => 'Cama estilo oriental, de diseño funcional, con combinación en texturas y espesor de materiales. Amplios cajones de guardado, todos con correderas metálicas. También cuenta con un sector tipo baulera para guardado de cajas, valijas o bolsas. Una línea concebida con un diseño actual, minimalista, con colores clásicos y un aspecto moderno a la vez. Súper resistente gracias a su estructura reforzada, soportando más de 400 kg. Fácil de transportar y con las medidas ideales.',
                'price' => '18400',
                'picture' => 'assets/img/deseados/camas-6.jpg',
                'category_id' => '4',
                'featured' => false
            ],
            [
                'name' => 'Cama Nido',
                'slug' => 'cama-nido',
                'description' => 'Cama estilo oriental, de diseño funcional, con combinación en texturas y espesor de materiales. Amplios cajones de guardado, todos con correderas metálicas. También cuenta con un sector tipo baulera para guardado de cajas, valijas o bolsas. Una línea concebida con un diseño actual, minimalista, con colores clásicos y un aspecto moderno a la vez. Súper resistente gracias a su estructura reforzada, soportando más de 400 kg. Fácil de transportar y con las medidas ideales.',
                'price' => '25800',
                'picture' => 'assets/img/deseados/camas-7.jpg',
                'category_id' => '4',
                'featured' => false
            ],
            [
                'name' => 'Cama Simple Modern',
                'slug' => 'cama-simple-modern',
                'description' => 'Cama estilo oriental, de diseño funcional, con combinación en texturas y espesor de materiales. Amplios cajones de guardado, todos con correderas metálicas. También cuenta con un sector tipo baulera para guardado de cajas, valijas o bolsas. Una línea concebida con un diseño actual, minimalista, con colores clásicos y un aspecto moderno a la vez. Súper resistente gracias a su estructura reforzada, soportando más de 400 kg. Fácil de transportar y con las medidas ideales.',
                'price' => '22000',
                'picture' => 'assets/img/deseados/camas-8.jpg',
                'category_id' => '4',
                'featured' => false
            ],
            [
                'name' => 'Cama Torino',
                'slug' => 'cama-torino',
                'description' => 'Cama estilo oriental, de diseño funcional, con combinación en texturas y espesor de materiales. Amplios cajones de guardado, todos con correderas metálicas. También cuenta con un sector tipo baulera para guardado de cajas, valijas o bolsas. Una línea concebida con un diseño actual, minimalista, con colores clásicos y un aspecto moderno a la vez. Súper resistente gracias a su estructura reforzada, soportando más de 400 kg. Fácil de transportar y con las medidas ideales.',
                'price' => '27100',
                'picture' => 'assets/img/deseados/camas-9.jpg',
                'category_id' => '4',
                'featured' => false
            ],
            [
                'name' => 'Banco Bantu',
                'slug' => 'banco-bantu',
                'description' => 'Banco moderno, elegante y de diseño. El más vendido del mercado. Fácil de limpiar y con antideslizante en la base. Fabricado con materiales de primera calidad. Súper cómodo y de alta resistencia, soporta hasta 100 kg. De fácil transporte y gran durabilidad.',
                'price' => '990',
                'picture' => 'assets/img/deseados/bancos-1.jpg',
                'category_id' => '5',
                'featured' => false
            ],
            [
                'name' => 'Banco Bantu White',
                'slug' => 'banco-bantu-white',
                'description' => 'Banco moderno, elegante y de diseño. El más vendido del mercado. Fácil de limpiar y con antideslizante en la base. Fabricado con materiales de primera calidad. Súper cómodo y de alta resistencia, soporta hasta 100 kg. De fácil transporte y gran durabilidad.',
                'price' => '990',
                'picture' => 'assets/img/deseados/bancos-2.jpg',
                'category_id' => '5',
                'featured' => false
            ],
            [
                'name' => 'Banco Cult',
                'slug' => 'banco-cult',
                'description' => 'Banco moderno, elegante y de diseño. El más vendido del mercado. Fácil de limpiar y con antideslizante en la base. Fabricado con materiales de primera calidad. Súper cómodo y de alta resistencia, soporta hasta 100 kg. De fácil transporte y gran durabilidad.',
                'price' => '1600',
                'picture' => 'assets/img/deseados/bancos-4.jpg',
                'category_id' => '5',
                'featured' => false
            ],
            [
                'name' => 'Banco Lismaster',
                'slug' => 'banco-lismaster',
                'description' => 'Banco moderno, elegante y de diseño. El más vendido del mercado. Fácil de limpiar y con antideslizante en la base. Fabricado con materiales de primera calidad. Súper cómodo y de alta resistencia, soporta hasta 100 kg. De fácil transporte y gran durabilidad.',
                'price' => '790',
                'picture' => 'assets/img/deseados/bancos-5.jpg',
                'category_id' => '5',
                'featured' => false
            ],
            [
                'name' => 'Banco Lumpur',
                'slug' => 'banco-lumpur',
                'description' => 'Banco moderno, elegante y de diseño. El más vendido del mercado. Fácil de limpiar y con antideslizante en la base. Fabricado con materiales de primera calidad. Súper cómodo y de alta resistencia, soporta hasta 100 kg. De fácil transporte y gran durabilidad.',
                'price' => '1200',
                'picture' => 'assets/img/deseados/bancos-6.jpg',
                'category_id' => '5',
                'featured' => false
            ],
            [
                'name' => 'Banco María',
                'slug' => 'banco-maria',
                'description' => 'Banco moderno, elegante y de diseño. El más vendido del mercado. Fácil de limpiar y con antideslizante en la base. Fabricado con materiales de primera calidad. Súper cómodo y de alta resistencia, soporta hasta 100 kg. De fácil transporte y gran durabilidad.',
                'price' => '1200',
                'picture' => 'assets/img/deseados/bancos-7.jpg',
                'category_id' => '5',
                'featured' => false
            ],
            [
                'name' => 'Banco Petit',
                'slug' => 'banco-petit',
                'description' => 'Banco moderno, elegante y de diseño. El más vendido del mercado. Fácil de limpiar y con antideslizante en la base. Fabricado con materiales de primera calidad. Súper cómodo y de alta resistencia, soporta hasta 100 kg. De fácil transporte y gran durabilidad.',
                'price' => '890',
                'picture' => 'assets/img/deseados/bancos-8.jpg',
                'category_id' => '5',
                'featured' => false
            ],
            [
                'name' => 'Banco Torino',
                'slug' => 'banco-torino',
                'description' => 'Banco moderno, elegante y de diseño. El más vendido del mercado. Fácil de limpiar y con antideslizante en la base. Fabricado con materiales de primera calidad. Súper cómodo y de alta resistencia, soporta hasta 100 kg. De fácil transporte y gran durabilidad.',
                'price' => '1550',
                'picture' => 'assets/img/deseados/bancos-9.jpg',
                'category_id' => '5',
                'featured' => false
            ],
            [
                'name' => 'Banco Classic Bantu',
                'slug' => 'banco-classic-bantu',
                'description' => 'Banco moderno, elegante y de diseño. El más vendido del mercado. Fácil de limpiar y con antideslizante en la base. Fabricado con materiales de primera calidad. Súper cómodo y de alta resistencia, soporta hasta 100 kg. De fácil transporte y gran durabilidad.',
                'price' => '1200',
                'picture' => 'assets/img/deseados/bancos-3.jpg',
                'category_id' => '5',
                'featured' => false
            ]
        ]);
    }
}
