<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class PaintingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('paintings')->insert([
            [
                'piece_of_art' => 'La Gioconda (Mona Lisa)',
                'painter' => 'Leonardo da Vinci',
                'creation_date' => '1503-1506',
                'art_movement' => 'Renacimiento',
                'artistic_technique' => 'Óleo sobre tabla de álamo',
                'size' => '77 cm x 53 cm',
                'museum' => 'Museo del Louvre, París',
                'curiosity' => 'La pintura fue robada en 1911 por un empleado del Louvre, Vincenzo Peruggia, y estuvo desaparecida durante dos años antes de ser recuperada.',
            ],
            [
                'piece_of_art' => 'La Última Cena',
                'painter' => 'Leonardo da Vinci',
                'creation_date' => '1495-1498',
                'art_movement' => 'Renacimiento',
                'artistic_technique' => 'Temple y óleo sobre yeso seco (técnica experimental)',
                'size' => '460 cm x 880 cm',
                'museum' => 'Convento de Santa Maria delle Grazie, Milán',
                'curiosity' => ' Da Vinci utilizó una técnica experimental en vez de fresco tradicional, lo que provocó que la pintura comenzara a deteriorarse rápidamente poco después de su finalización.',
            ],
            [
                'piece_of_art' => 'El Jardín de las Delicias',
                'painter' => 'Hieronymus Bosch',
                'creation_date' => '1500-1505',
                'art_movement' => 'Prerrenacimiento / Gótico tardío',
                'artistic_technique' => 'Óleo sobre tabla de madera',
                'size' => '220 cm x 389 cm (tríptico abierto)',
                'museum' => 'Museo del Prado, Madrid',
                'curiosity' => 'Nadie sabe con certeza el significado exacto de la obra, y ha sido objeto de múltiples interpretaciones, desde alegorías del pecado hasta visiones fantásticas del mundo.',
            ],
            [
                'piece_of_art' => 'La Escuela de Atenas',
                'painter' => 'Rafael Sanzio',
                'creation_date' => '1509-1511',
                'art_movement' => 'Renacimiento',
                'artistic_technique' => 'Fresco',
                'size' => '500 cm x 770 cm',
                'museum' => 'Museos Vaticanos, Ciudad del Vaticano',
                'curiosity' => 'En esta obra, Rafael se autorretrata como uno de los filósofos (Euclides), y se cree que los rostros de Platón y Aristóteles están inspirados en Leonardo da Vinci y Michelangelo, respectivamente.',
            ],
            [
                'piece_of_art' => 'Las Meninas',
                'painter' => 'Diego Velázquez',
                'creation_date' => '1656',
                'art_movement' => 'Barroco',
                'artistic_technique' => 'Óleo sobre lienzo',
                'size' => '318 cm x 276 cm',
                'museum' => 'Museo del Prado, Madrid',
                'curiosity' => 'La complejidad de la obra reside en su juego de perspectivas. Velázquez incluyó su propio retrato pintando a la familia real, creando una sutil interacción entre realidad y representación.',
            ],
            [
                'piece_of_art' => 'El rapto de Proserpina',
                'painter' => 'Peter Paul Rubens',
                'creation_date' => '1636-1638',
                'art_movement' => 'Barroco flamenco',
                'artistic_technique' => 'Óleo sobre lienzo',
                'size' => '200 cm x 175 cm',
                'museum' => 'Kunsthistorisches Museum, Viena',
                'curiosity' => 'Rubens era conocido por su dominio en pintar cuerpos humanos en movimiento, y en esta obra destacó particularmente la representación del dramatismo de la escena mitológica.',
            ],
            [
                'piece_of_art' => 'La Noche Estrellada',
                'painter' => 'Vincent van Gogh',
                'creation_date' => '1889',
                'art_movement' => 'Postimpresionismo',
                'artistic_technique' => 'Óleo sobre lienzo',
                'size' => '73.7 cm x 92.1 cm',
                'museum' => 'Museo de Arte Moderno (MoMA), Nueva York',
                'curiosity' => 'Van Gogh pintó esta obra desde su habitación en un hospital psiquiátrico en Saint-Rémy-de-Provence, y no se sabe si el paisaje se basa completamente en la realidad o en sus visiones internas.',
            ],
            [
                'piece_of_art' => 'Impresión, Sol Naciente',
                'painter' => 'Claude Monet',
                'creation_date' => '1872',
                'art_movement' => 'Impresionismo',
                'artistic_technique' => 'Óleo sobre lienzo',
                'size' => '48 cm x 63 cm',
                'museum' => 'Museo Marmottan Monet, París',
                'curiosity' => 'Este cuadro dio nombre al movimiento impresionista, tras ser descrito con desprecio por un crítico como una "impresión" más que una pintura acabad',
            ],
            [
                'piece_of_art' => 'El Grito',
                'painter' => 'Edvard Munch',
                'creation_date' => '1893',
                'art_movement' => 'Expresionismo',
                'artistic_technique' => 'Óleo, temple y pastel sobre cartón',
                'size' => '91 cm x 73.5 cm',
                'museum' => 'Galería Nacional de Noruega, Oslo',
                'curiosity' => 'Hay varias versiones de "El Grito", y una de ellas fue robada en 2004 del Museo Munch de Oslo, pero fue recuperada dos años después.',
            ],
            [
                'piece_of_art' => 'Guernica',
                'painter' => 'Pablo Picasso',
                'creation_date' => '1937',
                'art_movement' => 'Cubismo',
                'artistic_technique' => 'Óleo sobre lienzo',
                'size' => '349 cm x 776 cm',
                'museum' => 'Museo Reina Sofía, Madrid',
                'curiosity' => 'Picasso creó "Guernica" como respuesta al bombardeo nazi sobre la ciudad vasca de Guernica, y la obra se convirtió en un poderoso símbolo antibélico.',
            ],
            [
                'piece_of_art' => 'La Persistencia de la Memoria',
                'painter' => 'Salvador Dalí',
                'creation_date' => '1931',
                'art_movement' => 'Surrealismo',
                'artistic_technique' => 'Óleo sobre lienzo',
                'size' => '24 cm x 33 cm',
                'museum' => 'Museo de Arte Moderno (MoMA), Nueva York',
                'curiosity' => 'Dalí se inspiró en los relojes blandos tras observar un trozo de queso Camembert derritiéndose al sol.',
            ],
            [
                'piece_of_art' => 'El Almuerzo de los Remeros',
                'painter' => 'Pierre-Auguste Renoir',
                'creation_date' => '1881',
                'art_movement' => 'Impresionismo',
                'artistic_technique' => 'Óleo sobre lienzo',
                'size' => '130 cm x 173 cm',
                'museum' => 'Colección Phillips, Washington D.C.',
                'curiosity' => 'Esta pintura es famosa por representar a los amigos de Renoir, incluidos otros artistas, escritores y la que sería su futura esposa, Aline Charigot.',
            ],
            [
                'piece_of_art' => 'El Beso',
                'painter' => 'Gustav Klimt',
                'creation_date' => '1907-1908',
                'art_movement' => 'Simbolismo / Art Nouveau',
                'artistic_technique' => 'Óleo y pan de oro sobre lienzo',
                'size' => '180 cm x 180 cm',
                'museum' => 'Österreichische Galerie Belvedere, Viena',
                'curiosity' => 'Klimt utilizó pan de oro real en la pintura, lo que da a la obra su icónica luminosidad dorada. El uso de este material evoca la estética bizantina.',
            ],
            [
                'piece_of_art' => 'El Nacimiento de Venus',
                'painter' => 'Sandro Botticelli',
                'creation_date' => '1485-1486',
                'art_movement' => 'Renacimiento temprano',
                'artistic_technique' => 'Temple sobre lienzo',
                'size' => '172.5 cm x 278.9 cm',
                'museum' => 'Galería Uffizi, Florencia',
                'curiosity' => 'Botticelli pintó "El nacimiento de Venus" no sobre tabla, como era típico en la época, sino sobre lienzo, algo inusual para el Renacimiento italiano.',
            ],
            [
                'piece_of_art' => 'La Libertad Guiando al Pueblo',
                'painter' => 'Eugène Delacroix',
                'creation_date' => '1830',
                'art_movement' => 'Romanticismo',
                'artistic_technique' => 'Óleo sobre lienzo',
                'size' => '260 cm x 325 cm',
                'museum' => 'Museo del Louvre, París',
                'curiosity' => 'La mujer que simboliza la libertad, "Marianne", se ha convertido en un símbolo de la República Francesa y la lucha por la libertad en todo el mundo.',
            ],
        ]);
    }
}
