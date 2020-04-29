<?php

use Illuminate\Database\Seeder;
use App\Kategori;

class KategorisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'nama_kategori' => 'Setup',
                'children' => [
                    [
                        'nama_kategori' => 'General',
                        'children' => [
                            [
                                'nama_kategori' => 'Buat Gmail',
                                'nilai' => 2,
                            ],
                            [
                                'nama_kategori' => 'Beli Domain',
                                'nilai' => 2,
                            ],
                            [
                                'nama_kategori' => 'Setting NameServer',
                                'nilai' => 1,
                            ],
                            [
                                'nama_kategori' => 'Add Domain to Hosting',
                                'nilai' => 1,
                            ],
                            [
                                'nama_kategori' => 'Setting SSL Certificate',
                                'nilai' => 2,
                            ],
                            [
                                'nama_kategori' => 'Build WordPress with Softaculus',
                                'nilai' => 2,
                            ],
                        ],
                    ],
                    [
                        'nama_kategori' => 'WordPress Setting',
                        'children' => [
                            [
                                'nama_kategori' => 'Create new Page "Home"',
                                'nilai' => 1,
                            ],
                            [
                                'nama_kategori' => 'Set TimeZone to Indonesia',
                                'nilai' => 1,
                            ],
                            [
                                'nama_kategori' => 'Set FrontPage to "Home"',
                                'nilai' => 1,
                            ],
                            [
                                'nama_kategori' => 'Uncheck crop Thumbnail on Media Setting',
                                'nilai' => 1,
                            ],
                            [
                                'nama_kategori' => 'Set Permalinks',
                                'nilai' => 1,
                            ],
                        ],
                    ],
                    [
                        'nama_kategori' => 'Install Plugins & Theme',
                        'children' => [
                            [
                                'nama_kategori' => 'WP Super Cache and Setting',
                                'nilai' => 1,
                            ],
                            [
                                'nama_kategori' => 'All in One SEO and Setting',
                                'nilai' => 1,
                            ],
                            [
                                'nama_kategori' => 'Elementor and Setting',
                                'nilai' => 1,
                            ],
                            [
                                'nama_kategori' => 'Google Analytics Dashboard WP',
                                'nilai' => 1,
                            ],
                            [
                                'nama_kategori' => 'WPS Hide Login and Setting',
                                'nilai' => 1,
                            ],
                            [
                                'nama_kategori' => 'OceanWP Theme',
                                'nilai' => 1,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'nama_kategori' => 'Proses',
                'children' => [
                    [
                        'nama_kategori' => 'General',
                        'children' => [
                            [
                                'nama_kategori' => 'Concept',
                                'nilai' => 2,
                            ],
                            [
                                'nama_kategori' => 'Data Website',
                                'nilai' => 2,
                            ],
                            [
                                'nama_kategori' => 'Setting General and Secondary Color',
                                'nilai' => 1,
                            ],
                            [
                                'nama_kategori' => 'Setting Heading and Body Fonts',
                                'nilai' => 1,
                            ],
                        ],
                    ],
                    [
                        'nama_kategori' => 'OceanWP HomePage Styling',
                        'children' => [
                            [
                                'nama_kategori' => 'Styling TopBar',
                                'nilai' => 3,
                            ],
                            [
                                'nama_kategori' => 'Styling Header',
                                'nilai' => 3,
                            ],
                            [
                                'nama_kategori' => 'Styling Footer',
                                'nilai' => 3,
                            ],
                        ],
                    ],
                    [
                        'nama_kategori' => 'Elementor HomePage Styling',
                        'children' => [
                            [
                                'nama_kategori' => 'Header Section',
                                'nilai' => 3,
                            ],
                            [
                                'nama_kategori' => 'Header Image',
                                'nilai' => 4,
                            ],
                            [
                                'nama_kategori' => 'About us Section',
                                'nilai' => 3,
                            ],
                            [
                                'nama_kategori' => 'About us Image',
                                'nilai' => 4,
                            ],
                            [
                                'nama_kategori' => 'Service or Product Section',
                                'nilai' => 4,
                            ],
                            [
                                'nama_kategori' => 'Click to Action or Call Section',
                                'nilai' => 3,
                            ],
                        ],
                    ],
                    [
                        'nama_kategori' => 'Other Pages',
                        'children' => [
                            [
                                'nama_kategori' => 'About us Page',
                                'nilai' => 5,
                            ],
                            [
                                'nama_kategori' => 'About us Article',
                                'nilai' => 5,
                            ],
                            [
                                'nama_kategori' => 'Contact us Page',
                                'nilai' => 5,
                            ],
                            [
                                'nama_kategori' => 'Contact us Content',
                                'nilai' => 5,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'nama_kategori' => 'Finishing',
                'children' => [
                    [
                        'nama_kategori' => 'General',
                        'children' => [
                            [
                                'nama_kategori' => 'Re-Check Page',
                                'nilai' => 5,
                            ],
                            [
                                'nama_kategori' => 'Widget Test',
                                'nilai' => 2,
                            ],
                            [
                                'nama_kategori' => 'Appreance Correction',
                                'nilai' => 3,
                            ],
                            [
                                'nama_kategori' => 'AAM',
                                'nilai' => 3,
                            ],
                            [
                                'nama_kategori' => 'Google Analytics Setting',
                                'nilai' => 3,
                            ],
                            [
                                'nama_kategori' => 'Poles',
                                'nilai' => 5,
                            ],
                        ],
                    ],
                    [
                        'nama_kategori' => 'Documentation',
                        'children' => [
                            [
                                'nama_kategori' => 'Speed',
                                'nilai' => 2,
                            ],
                            [
                                'nama_kategori' => 'Mobile Friendly',
                                'nilai' => 2,
                            ],
                            [
                                'nama_kategori' => 'FB Share',
                                'nilai' => 2,
                            ],
                            [
                                'nama_kategori' => 'Responsive',
                                'nilai' => 2,
                            ],
                            [
                                'nama_kategori' => 'Google Search Index',
                                'nilai' => 2,
                            ],
                            [
                                'nama_kategori' => 'SEO Score',
                                'nilai' => 2,
                            ],
                        ],
                    ],
                    [
                        'nama_kategori' => 'File Order',
                        'children' => [
                            [
                                'nama_kategori' => 'Lampiran Order',
                                'nilai' => 2,
                            ],
                            [
                                'nama_kategori' => 'Akun Text',
                                'nilai' => 2,
                            ],
                            [
                                'nama_kategori' => 'Akun Image',
                                'nilai' => 2,
                            ],
                            [
                                'nama_kategori' => 'Invoice',
                                'nilai' => 2,
                            ],
                        ],
                    ],
                    [
                        'nama_kategori' => 'Backup',
                        'children' => [
                            [
                                'nama_kategori' => 'Web Backup',
                                'nilai' => 0,
                            ],
                            [
                                'nama_kategori' => 'CSS Backup',
                                'nilai' => 0,
                            ],
                        ],
                    ],
                ],
            ],
        ];

        foreach($categories as $task)
        {
            Kategori::create($task);
        }
    }
}
