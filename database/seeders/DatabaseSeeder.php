<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Ancestry;
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
        Ancestry::factory()->create([
            'name' => 'Goblin',
            'description' => [
                'short' => [
                    'body' => 'These small folk live in the moment, and they prefer tall tales over factual records.',
                ],
                'flavor' => [
                    'body' => 'The convoluted histories other people cling to don’t interest goblins. These small folk live in the moment, and they prefer tall tales over factual records. The wars of a few decades ago might as well be from the ancient past. Misunderstood by other people, goblins are happy how they are. Goblin virtues are about being present, creative, and honest. They strive to lead fulfilled lives, rather than worrying about how their journeys will end. To tell stories, not nitpick the facts. To be small, but dream big.',
                ],
                'top' => [
                    'body' => 'Goblins have a reputation as simple creatures who love songs, fire, and eating disgusting things and who hate reading, dogs, and horses—and there are a great many for whom this description fits perfectly. However, great changes have come to goblinkind, and more and more goblins resist conformity to these stereotypes. Even among goblins that are more worldly, many still exemplify their old ways in some small manner, just to a more sensible degree. Some goblins remain deeply fascinated with fire or fearlessly devour a meal that might turn others’ stomachs. Others are endless tinkerers and view their companions’ trash as the components of gadgets yet to be made. Though goblins’ culture has splintered radically, their reputation has changed little. As such, goblins who travel to larger cities are frequently subjected to derision, and many work twice as hard at proving their worth. If you want a character who is eccentric, enthusiastic, and fun-loving, you should play a goblin.',
                ],
                'youmight' => [
                    'point1' => 'Strive to prove that you have a place among other civilized peoples, perhaps even to yourself. ',
                    'point2' => 'Fight tooth and nail—sometimes literally—to protect yourself and your friends from danger. ',
                    'point3' => 'Lighten the heavy emotional burdens others carry (and amuse yourself) with antics and pranks.',
                ],
                'othersprobably' => [
                    'point1' => 'Work to ensure you don’t accidentally (or intentionally) set too many things on fire.',
                    'point2' => 'Assume you can’t—or won’t—read ',
                    'point3' => 'Wonder how you survive given your ancestry’s typical gastronomic choices, reckless behavior, and love of fire',
                ],
                'physicaldescription' => [
                    'body' => 'Goblins are stumpy humanoids with large bodies, scrawny limbs, and massively oversized heads with large ears and beady red eyes. Their skin ranges from green to gray to blue, and they often bear scars, boils, and rashes. Goblins average 3 feet tall. Most are bald, with little or no body hair. Their jagged teeth fall out and regrow constantly, and their fast metabolism means they eat constantly and nap frequently. Mutations are also more common among goblins than other peoples, and goblins usually view particularly salient mutations as a sign of power or fortune. Goblins reach adolescence by the age of 3 and adulthood 4 or 5 years later. Goblins can live 50 years or more, but without anyone to protect them from each other or themselves, few live past 20 years of age.',
                ],
                'society' => [
                    'body' => "Goblins tend to flock to strong leaders, forming small tribes. These tribes rarely number more than a hundred, though the larger a tribe is, the more diligent the leader must be to keep order—a notoriously difficult task. As new threats rise across the Inner Sea region, many tribal elders have put aside their reckless ways in the hope of forging alliances that offer their people a greater chance at survival. Play and creativity matter more to goblins than productivity or study, and their encampments erupt with songs and laughter. Goblins bond closely with their allies, fiercely protecting those companions who have protected them or offered a sympathetic ear. Goblins tend to assume for their own protection that members of taller ancestries, which goblins often refer to colloquially as “longshanks,” won’t treat them kindly. Learning to trust longshanks is difficult for a goblin, and it’s been only in recent years that such a partnership has even been an option. However, their attitude as a people is changing rapidly, and their short lifespans and poor memories help them adapt quickly.",
                ],
                'beliefs' => [
                    'body' => "Even well-intentioned goblins have trouble following the rules, meaning they’re rarely lawful. Most goblin adventurers are chaotic neutral or chaotic good. Organized worship confounds goblins, and most of them would rather pick their own deities, choosing powerful monsters, natural wonders, or anything else they find fascinating. Longshanks might have books upon books about the structures of divinity, but to a goblin, anything can be a god if you want it to. Goblins who spend time around people of other ancestries might adopt some of their beliefs, though, and many goblin adventurers adopt the worship of Cayden Cailean.",
                ],
                'names' => [
                    'body' => 'Goblins keep their names simple. A good name should be easy to pronounce, short enough to shout without getting winded, and taste good to say. The namer often picks a word that rhymes with something they like so that writing songs is easier. Since there aren’t any real traditions regarding naming in goblin culture, children often name themselves once they’re old enough to do something resembling talking.',
                    'names' => 'Ak, Bokker, Frum, Guzmuk, Krobby, Loohi, Mazmord, Neeka, Omgot, Ranzak, Rickle, Tup, Wakla, Yonk, Zibini',
                ],
            ],
            'hit_points' => 6,
            'size' => 'Small',
            'speed' => 25,
            'ability_boosts' => ['Dexterity', 'Charisma', 'Free'],
            'ability_flaw' => 'Wisdom',
            'languages' => ['Common', 'Goblin', "Additional languages equal to your Intelligence modifier (if it's positive). Choose from Draconic, Dwarven, Gnoll, Gnomish, Halfling, Orcish, and any other languages to which you have access (such as the languages prevalent in your region)."],
            'traits' => ['Goblin', 'Humanoid'],
            'vision' => 'Darkvision',
        ]);
        // Ancestry::factory()->create([
        //     'name' => 'Human',
        //     'heritage' => 'Versatile Heritage',
        //     'description' => 'As unpredictable and varied as any of Golarion\'s peoples, humans have exceptional drive and the capacity to endure and expand.',
        //     'hit_points' => 8,
        //     'size' => 'Medium',
        //     'speed' => 25,
        //     'ability_boosts1' => 'Two Free',
        //     'ability_flaw' => 'Free',
        //     'languages' => 'Common',
        //     'vision' => 'Normal',
        // ]);
        // Ancestry::factory()->create([
        //     'name' => 'Elf',
        //     'heritage' => 'Ancient Elf',
        //     'description' => 'As an ancient people, elves have seen great change and have the perspective that can come only from watching the arc of history.',
        //     'hit_points' => 6,
        //     'size' => 'Medium',
        //     'speed' => 30,
        //     'ability_boosts1' => 'Dexterity',
        //     'ability_boosts2' => 'Intelligence',
        //     'ability_boosts3' => 'Free',
        //     'ability_flaw' => 'Constitution',
        //     'languages' => 'Common, Elven',
        //     'vision' => 'Low-Light Vision',

        // ]);
        Ancestry::factory()->create([
            'name' => 'Dwarf',
            'description' => [
                'short' => [
                    'body' => 'Dwarves have a well-earned reputation as a stoic and stern people, but they also have an unbridled zeal and deeply value artisanship.',
                ],
                'flavor' => [
                    'body' => 'Dwarves have a well-earned reputation as a stoic and stern people, ensconced within citadels and cities carved from solid rock. While some see them as dour and humorless crafters of stone and metal, dwarves and those who have spent time among them understand their unbridled zeal for their work, caring far more about quality than quantity. To a stranger, they can seem untrusting and clannish, but to their friends and family, they are warm and caring, their halls filled with the sounds of laughter and hammers hitting anvils.',
                ],
                'top' => [
                    'body' => 'Dwarves are slow to trust those outside their kin, but this wariness is not without reason. Dwarves have a long history of forced exile from ancestral holds and struggles against the depredations of savage foes, especially giants, goblinoids, orcs, and the horrors that dwell deep below the surface. While trust from a dwarf is hard-won, once gained it is as strong as iron.
                    If you want to play a character who is as hard as nails, a stubborn and unrelenting adventurer, with a mix of rugged toughness and deep wisdom—or at least dogged conviction—you should play a dwarf.',
                ],
                'youmight' => [
                    'point1' => 'Strive to uphold your personal honor, no matter the situation.',
                    'point2' => 'Appreciate quality craftsmanship in all forms and insist upon it for all your gear.',
                    'point3' => 'Don’t waver or back down once you’ve set your mind to something.',
                ],
                'othersprobably' => [
                    'point1' => 'See you as stubborn, though whether they see this as an asset or a detriment changes from one person to the next. ',
                    'point2' => 'Assume you are an expert in matters related to stonework, mining, precious metals, and gems. ',
                    'point3' => 'Recognize the deep connection you have with your family, heritage, and friends.',
                ],
                'physicaldescription' => [
                    'body' => 'Dwarves are short and stocky, standing about a foot shorter than most humans. They have wide, compact bodies and burly frames. Dwarves of all genders pride themselves on the length of their hair, which they often braid into intricate patterns, some of which represent specific clans. A long beard is a sign of masculinity and honor among the dwarves, and thus a clean-shaven male dwarf is considered weak, untrustworthy, or worse. Dwarves typically reach physical adulthood around the age of 25, though their traditionalist culture places more value on completing coming of age ceremonies unique to each clan than reaching a certain age. A typical dwarf can live to around 350 years old.',
                ],
                'society' => [
                    'body' => "The ancient surface empire the dwarves once ruled fell long ago, overwhelmed by orc and goblinoid enemies. Today's dwarves today retain many of the qualities that propelled their people to greatness in ancient times: fierceness, gumption, and stubbornness in endeavors ranging from battle and craftsmanship to forging ties with family and friends. While the distance between their mountain Sky Citadels can create vast cultural divides between various dwarf clans, most dwarven societies share a number of similarities. Nearly all dwarven peoples share a passion for stonework, metalwork, and gem-cutting. Most are highly skilled at architecture and mining, and many share a hatred of giants, orcs, and goblinoids. Few dwarves are seen without their clan dagger strapped to their belt. This dagger is forged just before a dwarf's birth and bears the gemstone of their clan. A parent uses this dagger to cut the infant's umbilical cord, making it the first weapon to taste their blood.",
                ],
                'beliefs' => [
                    'body' => "Dwarves tend to value honor and closely follow the traditions of their clans and kingdoms. They have a strong sense of friendship and justice, though they are often very particular about who they consider a friend. They work hard and play harder— especially when strong ale is involved.The typical dwarf is lawful good or lawful neutral and prefers to worship deities of those alignments. Torag, god of dwarvenkind, is the dwarves' primary deity, though worship of Torag's family members is also common.",
                ],
                'names' => [
                    'body' => 'Dwarves honor their children with names taken from ancestors or dwarven heroes, and it’s quite rare to invent a new name or to borrow a name from another culture for a child. When introducing themselves, dwarves tend to list their family and clan, plus any number of other familial connections and honorifics. Dwarven names usually contain hard consonants and are rarely more or fewer than two syllables.',
                    'names' => 'Agna, Bodill, Dolgrin, Edrukk, Grunyar, Ingra, Kazmuk, Kotri, Lupp, Morgrym, Rogar, Rusilka, Torra, Yangrit',
                ],
            ],
            'hit_points' => 10,
            'size' => 'Medium',
            'speed' => 20,
            'ability_boosts' => ['Constitution', 'Wisdom', 'Free'],
            'ability_flaw' => 'Charisma',
            'languages' => ['Common', 'Dwarven', "Additional languages equal to your Intelligence modifier (if it's positive). Choose from Gnomish, Goblin, Jotun, Orcish, Petran, Sakvroth, and any other languages to which you have access (such as the languages prevalent in your region)."],
            'traits' => ['Dwarf', 'Humanoid'],
            'vision' => 'Darkvision',
        ]);
        // Ancestry::factory()->create([
        //     'name' => 'Gnome',
        //     'heritage' => 'Fey-touched Gnome',
        //     'description' => 'Hungry for experiences, gnomes wander mentally and physically, trying to stave off an ailment that threatens all of them.',
        //     'hit_points' => 8,
        //     'size' => 'Small',
        //     'speed' => 25,
        //     'ability_boosts1' => 'Constitution',
        //     'ability_boosts2' => 'Charisma',
        //     'ability_boosts3' => 'Free',
        //     'ability_flaw' => 'Strength',
        //     'languages' => 'Common, Fey, Gnomish',
        //     'vision' => 'Low-Light Vision',
        // ]);
        // Ancestry::factory()->create([
        //     'name' => 'Halfling',
        //     'heritage' => 'Nomadic Halfling',
        //     'description' => 'Halflings are a short, resilient people who exhibit curiosity and humor. Halflings control few settlements larger than villages.',
        //     'hit_points' => 6,
        //     'size' => 'Small',
        //     'speed' => 25,
        //     'ability_boosts1' => 'Dexterity',
        //     'ability_boosts2' => 'Wisdom',
        //     'ability_boosts3' => 'Free',
        //     'ability_flaw' => 'Strength',
        //     'languages' => 'Common, Halfling',
        //     'vision' => 'Keen Eyes',
        // ]);
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
