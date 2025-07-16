<section id="departments" class="py-20 bg-gradient-to-br  from-purple-900 via-black to-blue-900 relative overflow-hidden">
            <!-- Animated gradient background elements -->
            <div class="absolute -top-1/3 -left-1/4 w-full h-full bg-gradient-to-br from-purple-900/10 via-transparent to-transparent rounded-full filter blur-3xl opacity-20"></div>
            <div class="absolute -bottom-1/3 -right-1/4 w-full h-full bg-gradient-to-tl from-blue-900/10 via-transparent to-transparent rounded-full filter blur-3xl opacity-20"></div>

            <div class="max-w-7xl mx-auto px-4 relative z-10">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Film Production <span class="gradient-text">Departments</span></h2>
                    <p class="text-gray-400 max-w-2xl mx-auto">The interconnected ecosystem of film creation</p>
                </div>
            
                <?php
                $departments = [
                    [
                        'title' => 'Direction Department',
                        'category' => 'Creative Leadership',
                        'description' => 'The visionary force behind the film, responsible for guiding all creative aspects and unifying the production.',
                        'icon' => 'M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z',
                        'color' => 'purple',
                        'roles' => [
                            ['title' => 'Director', 'description' => 'Oversees all creative decisions and guides the cast/crew'],
                            ['title' => 'Assistant Director', 'description' => 'Manages set operations and scheduling'],
                            ['title' => '2nd Unit Director', 'description' => 'Handles secondary footage and action sequences']
                        ]

                    ],
                    [
                        'title' => 'Writing Department',
                        'category' => 'Story Foundation',
                        'description' => 'Crafts the narrative blueprint of the film through scripts, dialogue, and maintaining continuity.',
                        'icon' => 'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z',
                        'color' => 'blue',
                        'roles' => [
                            ['title' => 'Screenwriter', 'description' => 'Creates the screenplay and story structure'],
                            ['title' => 'Script Supervisor', 'description' => 'Ensures continuity throughout production'],
                            ['title' => 'Dialogue Coach', 'description' => 'Refines character voices and speech']
                        ]

                    ],
                    [
                        'title' => 'Cinematography',
                        'category' => 'Visual Storytelling',
                        'description' => 'Translates the script into compelling visual language through camera work and lighting.',
                        'icon' => 'M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z M15 13a3 3 0 11-6 0 3 3 0 016 0z',
                        'color' => 'pink',
                        'roles' => [
                            ['title' => 'Director of Photography', 'description' => 'Leads camera and lighting departments'],
                            ['title' => 'Camera Operator', 'description' => 'Physically operates the camera'],
                            ['title' => '1st AC', 'description' => 'Maintains focus and camera equipment']
                        ]

                    ],
                    [
                        'title' => 'Lighting & Grip',
                        'category' => 'Visual Atmosphere',
                        'description' => 'Shapes the mood and visibility through lighting techniques and camera support systems.',
                        'icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z',
                        'color' => 'purple',
                        'roles' => [
                            ['title' => 'Gaffer', 'description' => 'Chief lighting technician'],
                            ['title' => 'Key Grip', 'description' => 'Oversees camera mounting/rigging'],
                            ['title' => 'Best Boy', 'description' => 'Assistant to gaffer or key grip']
                        ]

                    ],
                    [
                        'title' => 'Acting Department',
                        'category' => 'Character Embodiment',
                        'description' => 'Brings characters to life through performance, guided by the director\'s vision.',
                        'icon' => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                        'color' => 'blue',
                        'roles' => [
                            ['title' => 'Lead Actors', 'description' => 'Portray main characters'],
                            ['title' => 'Supporting Cast', 'description' => 'Play secondary roles'],
                            ['title' => 'Casting Director', 'description' => 'Selects actors for roles']
                        ]

                    ],
                    [
                        'title' => 'Art Department',
                        'category' => 'Visual World Building',
                        'description' => 'Designs and creates the physical environment where the story takes place.',
                        'icon' => 'M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z',
                        'color' => 'pink',
                        'roles' => [
                            ['title' => 'Production Designer', 'description' => 'Creates overall visual concept'],
                            ['title' => 'Art Director', 'description' => 'Implements the designer\'s vision'],
                            ['title' => 'Set Decorator', 'description' => 'Dresses sets with props/furnishings']
                        ]

                    ],
                    [
                        'title' => 'Costume & Makeup',
                        'category' => 'Character Transformation',
                        'description' => 'Defines characters through clothing, hairstyling, and makeup design.',
                        'icon' => 'M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z',
                        'color' => 'purple',
                        'roles' => [
                            ['title' => 'Costume Designer', 'description' => 'Creates character wardrobes'],
                            ['title' => 'Makeup Artist', 'description' => 'Designs character looks'],
                            ['title' => 'Hair Stylist', 'description' => 'Creates character hairstyles']
                        ]

                    ],
                    [
                        'title' => 'Sound Department',
                        'category' => 'Audio Excellence',
                        'description' => 'Responsible for all audio elements including dialogue recording, sound effects, and musical score.',
                        'icon' => 'M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15.536a5 5 0 001.414 1.414m2.828-9.9a9 9 0 012.728-2.728',
                        'color' => 'blue',
                        'roles' => [
                            ['title' => 'Sound Designer', 'description' => 'Creates the auditory world of the film'],
                            ['title' => 'Boom Operator', 'description' => 'Manages microphone placement'],
                            ['title' => 'Foley Artist', 'description' => 'Creates custom sound effects']
                        ]

                    ],
                    [
                        'title' => 'Post-Production',
                        'category' => 'Final Assembly',
                        'description' => 'Where the raw footage is transformed into a cohesive film through editing, visual effects, and color grading.',
                        'icon' => 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10',
                        'color' => 'pink',
                        'roles' => [
                            ['title' => 'Editor', 'description' => 'Assembles the final cut'],
                            ['title' => 'VFX Artist', 'description' => 'Creates digital effects'],
                            ['title' => 'Colorist', 'description' => 'Ensures visual consistency']
                        ]

                    ],
                    [
                        'title' => 'Production',
                        'category' => 'Logistics',
                        'description' => 'Manages the business and organizational aspects of film production from planning to execution.',
                        'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2',
                        'color' => 'purple',
                        'roles' => [
                            ['title' => 'Producer', 'description' => 'Oversees entire production'],
                            ['title' => 'Line Producer', 'description' => 'Manages budget and schedule'],
                            ['title' => 'Location Manager', 'description' => 'Secures and manages filming sites']
                        ]

                    ],
                    [
                        'title' => 'Stunts',
                        'category' => 'Action Sequences',
                        'description' => 'Designs and executes dangerous or specialized physical actions for the film.',
                        'icon' => 'M13 5l7 7-7 7M5 5l7 7-7 7',
                        'color' => 'blue',
                        'roles' => [
                            ['title' => 'Stunt Coordinator', 'description' => 'Plans and oversees stunts'],
                            ['title' => 'Stunt Performer', 'description' => 'Executes dangerous actions'],
                            ['title' => 'Fight Choreographer', 'description' => 'Designs combat sequences']
                        ]

                    ],
                    [
                        'title' => 'Marketing',
                        'category' => 'Audience Engagement',
                        'description' => 'Creates and executes strategies to promote the film and connect with audiences.',
                        'icon' => 'M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z',
                        'color' => 'pink',
                        'roles' => [
                            ['title' => 'Publicist', 'description' => 'Manages media relations'],
                            ['title' => 'Distributor', 'description' => 'Handles film release'],
                            ['title' => 'Trailer Editor', 'description' => 'Creates promotional content']
                        ]

                    ]
                ];
            
                // Color mapping for consistent styling
                $colorClasses = [
                    'purple' => [
                        'bg' => 'bg-purple-600',
                        'border' => 'border-purple-500/30',
                        'text' => 'text-purple-300',
                        'shadow' => 'shadow-purple-500/30',
                        'bg-dark' => 'bg-purple-900/50',
                        'border-dark' => 'border-purple-800/50'
                    ],
                    'blue' => [
                        'bg' => 'bg-blue-600',
                        'border' => 'border-blue-500/30',
                        'text' => 'text-blue-300',
                        'shadow' => 'shadow-blue-500/30',
                        'bg-dark' => 'bg-blue-900/50',
                        'border-dark' => 'border-blue-800/50'
                    ],
                    'pink' => [
                        'bg' => 'bg-pink-600',
                        'border' => 'border-pink-500/30',
                        'text' => 'text-pink-300',
                        'shadow' => 'shadow-pink-500/30',
                        'bg-dark' => 'bg-pink-900/50',
                        'border-dark' => 'border-pink-800/50'
                    ]
                ];
                ?>

                <!-- Vertical Timeline Layout -->
                <div class="relative pl-8 md:pl-16 lg:pl-24">
                    <!-- Timeline line -->
                    <div class="absolute left-0 top-0 h-full w-0.5 bg-gradient-to-b from-purple-500 via-blue-500 to-pink-500"></div>
                
                    <!-- Department Items -->
                    <div class="space-y-16">
                        <?php foreach ($departments as $index => $dept): ?>
                            <div class="relative group ">
                                <div class="absolute -left-11 md:-left-16 lg:-left-22 top-0 w-8 h-8 rounded-full <?= $colorClasses[$dept['color']]['bg'] ?> flex items-center justify-center border-4 border-black z-10 transition-all duration-300 group-hover:scale-110 group-hover:shadow-lg group-hover:<?= $colorClasses[$dept['color']]['shadow'] ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $dept['icon'] ?>" />
                                    </svg>
                                </div>
                                <div class="ml-4 pl-4 pb-8 border-l-2 border-gray-800/50 <?= $index === count($departments) + 1 ? 'group-last:border-l-0 group-last:pb-0' : '' ?>">
                                    <div class="bg-gray-900/70 backdrop-blur-sm rounded-xl p-6 border border-gray-800/50 transition-all duration-300 hover:<?= $colorClasses[$dept['color']]['border'] ?> hover:<?= $colorClasses[$dept['color']]['shadow'] ?>/10 hover:shadow-lg">
                                        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-4">
                                            <h3 class="text-xl font-bold text-white"><?= $dept['title'] ?></h3>
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium <?= $colorClasses[$dept['color']]['bg-dark'] ?> <?= $colorClasses[$dept['color']]['text'] ?> border <?= $colorClasses[$dept['color']]['border-dark'] ?>">
                                                <?= $dept['category'] ?>
                                            </span>
                                        </div>
                                        <p class="text-gray-400 mb-4"><?= $dept['description'] ?></p>
                                    
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                                            <?php foreach ($dept['roles'] as $role): ?>
                                                <div class="bg-gray-800/50 rounded-lg p-3 border border-gray-700/50 hover:<?= $colorClasses[$dept['color']]['border'] ?> transition-colors">
                                                    <h4 class="font-medium <?= $colorClasses[$dept['color']]['text'] ?> mb-1"><?= $role['title'] ?></h4>
                                                    <p class="text-xs text-gray-400"><?= $role['description'] ?></p>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>

                                        <div class="text-center mt-8 flex justify-start">
                                            <button class="relative inline-flex items-center px-6 py-3 bg-gradient-to-r from-purple-600 to-blue-500 text-white rounded-lg overflow-hidden group">
                                                <span class="relative z-10">Connect Them</span>
                                                <span class="absolute inset-0 bg-gradient-to-r from-purple-700 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                                                <span class="absolute right-0 w-8 h-8 -mr-2 bg-white rounded-full opacity-10 group-hover:opacity-30 transform translate-x-10 group-hover:translate-x-0 transition-all duration-300"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
</section>