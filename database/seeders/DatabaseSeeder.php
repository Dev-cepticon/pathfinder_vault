<?php

namespace Database\Seeders;

use App\Models\Language;
use App\Models\User;
use App\Models\Heritage;
use App\Models\Feat;
use App\Models\Background;
use App\Models\Archetype;
use App\Models\Archetype_Feature;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(10)->create();
        $this->call([
            AncestrySeeder::class,
            LanguageSeeder::class,
    ]);
        
        Heritage::factory()->create([
            'ancestry_id' => 2,
            'name' => 'Ancient-Blooded Dwarf',
            'description' => "Dwarven heroes of old could shrug off their enemies' magic, and some of that resistance manifests in you. You gain the Call on Ancient Blood reaction.",
            'addon' => [
                'name' => 'Call on Ancient Blood',
                'type' => 'Reaction',
                'trigger' => "Trigger: You attempt a saving throw against a magical effect, but you haven't rolled yet.",
                'body' => "Your ancestors' innate resistance to magic surges, before slowly ebbing down. You gain a +1 circumstance bonus until the end of this turn. This bonus also applies to the triggering save.",
            ],
        ]);
        Heritage::factory()->create([
            'ancestry_id' => 2,
            'name' => 'Death Warden Dwarf',
            'description' => "Your ancestors were tomb guardians, and their power to ward off death passed on to you. If you roll a success on a saving throw against an effect that has the void trait or was created by an undead creature, you get a critical success instead.",
            'addon' => [
                'name' => '',
                'type' => 'Static',
                'trigger' => "",
                'body' => "",
            ],
        ]);
        Feat::factory()->create([
            'ancestry_id' => 2,
            'name' => 'Dwarven Lore',
            'description' => 'You eagerly absorbed the old stories and traditions of your ancestors, your gods, and your people, studying in subjects and techniques passed down for generation upon generation.
            You gain the trained proficiency rank in Crafting and Religion. If you would automatically become trained in one of those skills (from your background or class, for example), you instead become trained in a skill of your choice. You also become trained in Dwarven Lore.',
            'summary' => 'You eagerly absorbed the old stories and traditions of your ancestors, your gods, and your people.',
            'type' => 'Ancestry',
            'level' => 1,
            'tags' => ['Dwarf'],
        ]);
        Feat::factory()->create([
            'ancestry_id' => 2,
            'name' => 'Dwarven Weapon Familiarity',
            'description' => 'Your kin have instilled in you an affinity for hard-hitting weapons, and you prefer these to more elegant arms. You are trained with the battle axe, pick, and warhammer. You also gain access to all uncommon dwarf weapons. For the purpose of determining your proficiency, martial dwarf weapons are simple weapons and advanced dwarf weapons are martial weapons.',
            'summary' => 'Your kin have instilled in you an affinity for hard-hitting weapons, and you prefer these to more elegant arms.',
            'type' => 'Ancestry',
            'level' => 1,
            'tags' => ['Dwarf'],
        ]);
        Feat::factory()->create([
            'ancestry_id' => 2,
            'name' => 'Dwarven Weapon Cunning',
            'description' => 'You’ve learned cunning techniques to get the best effects out of your dwarven weapons. Whenever you critically hit using a battle axe, pick, warhammer, or a dwarf weapon, you apply the weapon’s critical specialization effect.',
            'summary' => 'Critical hits with dwarven weapons apply the weapon’s critical specialization effect.',
            'prereq' => 'Dwarven Weapon Familiarity',
            'type' => 'Ancestry',
            'level' => 5,
            'tags' => ['Dwarf'],
        ]);
        Feat::factory()->create([
            'ancestry_id' => 2,
            'name' => 'Stonewalker',
            'description' => 'You have a deep reverence for and connection to stone. You gain meld into stone as a 3rd-level divine innate spell that you can cast once per day. If you have the Stonecunning dwarf ancestry feat, you can attempt to find unusual stonework and stonework traps that require legendary proficiency in Perception. If you have both Stonecunning and legendary proficiency in Perception, when you’re not Seeking and the GM rolls a secret check for you to notice unusual stonework, you keep the bonus from Stonecunning and don’t take the –2 circumstance penalty.',
            'summary' => 'You have a deep reverence for and connection to stone.',
            'prereq' => null,
            'type' => 'Ancestry',
            'level' => 9,
            'tags' => ['Dwarf'],
        ]);
        Feat::factory()->create([
            'ancestry_id' => 2,
            'name' => 'Dwarven Weapon Expertise',
            'description' => 'Your dwarven affinity blends with your training, granting you great skill with dwarven weapons. Whenever you gain a class feature that grants you expert or greater proficiency in certain weapons, you also gain that proficiency for battle axes, picks, warhammers, and all dwarven weapons in which you are trained.',
            'summary' => 'You gain expert proficiency in battle axes, picks, warhammers, and all dwarven weapons in which you are trained.',
            'prereq' => 'Dwarven Weapon Familiarity',
            'type' => 'Ancestry',
            'level' => 13,
            'tags' => ['Dwarf'],
        ]);
        Background::factory()->create([
            'name' => 'Sailor',
            'description' => 'You heard the call of the sea from a young age. Perhaps you signed onto a merchant’s vessel, joined the navy, or even fell in with a crew of pirates and scalawags. Choose two ability boosts. One must be to Strength or Dexterity, and one is a free ability boost. You’re trained in the Athletics skill and the Sailing Lore skill. You gain the Underwater Marauder skill feat.',
            'ability_boosts' => ['required' => ['Strength', 'Wisdom'], 'free' => 1],
            'skill_proficiencies' => ['Athletics', 'Sailing Lore'],
            'feat_grants' => ['Underwater Marauder'],
        ]);
        Archetype::factory()->create(
            [
                'name' => 'Fighter',
                'description' => 
                [
                    'flavor' => 'Fighting for honor, greed, loyalty, or simply the thrill of battle, you are an undisputed master of weaponry and combat techniques. You combine your actions through clever combinations of opening moves, finishing strikes, and counterattacks whenever your foes are unwise enough to drop their guard. Whether you are a knight, mercenary, sharpshooter, or blade master, you have honed your martial skills into an art form and perform devastating critical attacks on your enemies.',
                    'duringCombat' => 'You strike with unmatched accuracy and use specialized combat techniques. A melee fighter stands between allies and enemies, attacking foes who try to get past. A ranged fighter delivers precise shots from a distance.',
                    'duringSocial' => 'You represent balance and a reasoned approach to problems, looking for solutions that not only are best for the natural world, but also allow the creatures within it to live in harmony and peace. You often propose compromises that allow both sides to gain what they truly need, even if they can’t have all that they desire.',
                    'whileExploring' => 'You keep up your defenses in preparation for combat, and keep an eye out for hidden threats. You also overcome physical challenges in your way, breaking down doors, lifting obstacles, climbing adeptly, and leaping across pits.',
                    'inDowntime' => 'You might perform manual labor or craft and repair armaments. If you know techniques you no longer favor, you might train yourself in new ones. If you’ve established your reputation, you might build an organization or a stronghold of your own.',
                    'youMight' => [
                        'point1' => 'Know the purpose and quality of every weapon and piece of armor you own.',
                        'point2' => 'Recognize that the danger of an adventurer’s life must be balanced out with great revelry or ambitious works.',
                        'point3' => 'Have little patience for puzzles or problems that require detailed logic or study.',
                    ],
                    'othersProbably' => [
                        'point1' => 'Find you intimidating until they get to know you—and maybe even after they get to know you. ',
                        'point2' => 'Expect you’re all brawn and no brains. ',
                        'point3' => 'Respect your expertise in the art of warfare and value your opinion on the quality of armaments.',
                    ],
                ],
                'key_attributes' => ['Strength', 'Dexterity'],
                'hit_points' => 10,
                'initail_proficiencies' => 
                [
                    'perception' => [
                        'proficiency' => 'Expert',
                        'text'=>'Expert in Perception',
                    ],
                    'saving_throws' => 
                    [
                        'prof1' => [
                            'category' => 'Fortitude',
                            'proficiency' => 'expert',
                        ],
                        'prof2' => [
                            'category' => 'Reflex',
                            'proficiency' => 'expert',
                        ],
                        'prof3' => [
                            'category' => 'Will',
                            'proficiency' => 'Trained',
                        ],
                        'text'=>'Expert in Fortitude <br> Expert in Reflex <br> Trained in Will',
                    ],
                    'skills' => 
                    [
                        "choices" => [
                            "fixed" => ["Acrobatics", "Athletics"],
                            "select" => 1,
                        ],
                        "additional" => [
                            "base" => 3,
                            "modifier" => "Intelligence",
                        ],
                        'text'=> 'Trained in your choice of Acrobatics or Athletics <br> Trained in a number of additional skills equal to 3 plus your Intelligence modifier'
                    ],
                    'attacks' => 
                    [
                        'prof1' => [
                            'category' => 'simple weapons',
                            'proficiency' => 'expert',
                        ],
                        'prof2' => [
                            'category' => 'martial weapons',
                            'proficiency' => 'expert',
                        ],
                        'prof3' => [
                            'category' => 'advanced weapons',
                            'proficiency' => 'trained',
                        ],
                        'prof4' => [
                            'category' => 'unarmed attacks',
                            'proficiency' => 'expert',
                        ],
                        'text'=>'Expert in simple weapons <br> Expert in martial weapons <br> Trained in advanced weapons <br> Expert in unarmed attacks',
                    ],
                    'defenses' => [
                        'prof1' => [
                            'category' => 'all armor',
                            'proficiency' => 'trained',
                        ],
                        'prof2' => [
                            'category' => 'unarmored defense',
                            'proficiency' => 'trained',
                        ],
                        'text'=>'Trained in all armor <br> Trained in unarmored defense',
                    ],
                    'class_dc' => [
                        'prof2' => [
                            'category' => 'fighter class DC',
                            'proficiency' => 'trained',
                        ],
                        'text'=>'Trained in fighter class DC',
                    ]
                ]
            ]
        );
        Archetype_Feature::factory()->create([
            'archetype_id' => 1,
            'name' => 'Fighter Feats',
            'description' => 'At 1st level and every even-numbered level, you gain a fighter class feat.',
            'level' => 1,
            'effect' => [
                'feat' => 'Fighter Feats',
            ],
        ]);
        Archetype_Feature::factory()->create([
            'archetype_id' => 1,
            'name' => 'Shield Block',
            'description' => 'You gain the Shield Block general feat, a reaction that lets you reduce damage with your shield.',
            'level' => 1,
            'effect' => [
                'feat' => 'Shield Block',
            ],
        ]);
        Feat::factory()->create([
            'archetype_id' => 1,
            'name' => 'Double Slice',
            'description' => 'You lash out at your foe with both weapons. Make two Strikes, one with each of your two melee weapons, each using your current multiple attack penalty. Both Strikes must have the same target. If the second Strike is made with a weapon that doesn’t have the agile trait, it takes a –2 penalty. <br>If both attacks hit, combine their damage, and then add any other applicable effects from both weapons. You add any precision damage only once, to the attack of your choice. Combine the damage from both Strikes and apply resistances and weaknesses only once. This counts as two attacks when calculating your multiple attack penalty.',
            'summary' => 'You lash out at your foe with both weapons.',
            'prereq' => null,
            'requirements' => 'You are wielding two melee weapons, each in a different hand.',
            'type' => 'Class',
            'level' => 1,
            'tags' => ['Fighter'],
        ]);
        

    }
}
