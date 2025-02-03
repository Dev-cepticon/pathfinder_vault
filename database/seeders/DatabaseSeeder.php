<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Ancestry;
use App\Models\Heritage;
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
                'flavor'=>[
                    'body' => 'The convoluted histories other people cling to don’t interest goblins. These small folk live in the moment, and they prefer tall tales over factual records. The wars of a few decades ago might as well be from the ancient past. Misunderstood by other people, goblins are happy how they are. Goblin virtues are about being present, creative, and honest. They strive to lead fulfilled lives, rather than worrying about how their journeys will end. To tell stories, not nitpick the facts. To be small, but dream big.',
                ],
                'top'=>[
                    'body' =>'Goblins have a reputation as simple creatures who love songs, fire, and eating disgusting things and who hate reading, dogs, and horses—and there are a great many for whom this description fits perfectly. However, great changes have come to goblinkind, and more and more goblins resist conformity to these stereotypes. Even among goblins that are more worldly, many still exemplify their old ways in some small manner, just to a more sensible degree. Some goblins remain deeply fascinated with fire or fearlessly devour a meal that might turn others’ stomachs. Others are endless tinkerers and view their companions’ trash as the components of gadgets yet to be made. Though goblins’ culture has splintered radically, their reputation has changed little. As such, goblins who travel to larger cities are frequently subjected to derision, and many work twice as hard at proving their worth. If you want a character who is eccentric, enthusiastic, and fun-loving, you should play a goblin.',
                ],
                'youmight'=>[
                    'point1' =>'Strive to prove that you have a place among other civilized peoples, perhaps even to yourself. ',
                    'point2' =>'Fight tooth and nail—sometimes literally—to protect yourself and your friends from danger. ',
                    'point3' =>'Lighten the heavy emotional burdens others carry (and amuse yourself) with antics and pranks.',
                ],
                'othersprobably'=>[
                    'point1' =>'Work to ensure you don’t accidentally (or intentionally) set too many things on fire.',
                    'point2' =>'Assume you can’t—or won’t—read ',
                    'point3' =>'Wonder how you survive given your ancestry’s typical gastronomic choices, reckless behavior, and love of fire',
                ],
                'physicaldescription'=>[
                    'body' =>'Goblins are stumpy humanoids with large bodies, scrawny limbs, and massively oversized heads with large ears and beady red eyes. Their skin ranges from green to gray to blue, and they often bear scars, boils, and rashes. Goblins average 3 feet tall. Most are bald, with little or no body hair. Their jagged teeth fall out and regrow constantly, and their fast metabolism means they eat constantly and nap frequently. Mutations are also more common among goblins than other peoples, and goblins usually view particularly salient mutations as a sign of power or fortune. Goblins reach adolescence by the age of 3 and adulthood 4 or 5 years later. Goblins can live 50 years or more, but without anyone to protect them from each other or themselves, few live past 20 years of age.',
                ],
                'society'=>[
                    'body' =>"Goblins tend to flock to strong leaders, forming small tribes. These tribes rarely number more than a hundred, though the larger a tribe is, the more diligent the leader must be to keep order—a notoriously difficult task. As new threats rise across the Inner Sea region, many tribal elders have put aside their reckless ways in the hope of forging alliances that offer their people a greater chance at survival. Play and creativity matter more to goblins than productivity or study, and their encampments erupt with songs and laughter. Goblins bond closely with their allies, fiercely protecting those companions who have protected them or offered a sympathetic ear. Goblins tend to assume for their own protection that members of taller ancestries, which goblins often refer to colloquially as “longshanks,” won’t treat them kindly. Learning to trust longshanks is difficult for a goblin, and it’s been only in recent years that such a partnership has even been an option. However, their attitude as a people is changing rapidly, and their short lifespans and poor memories help them adapt quickly.",
                ],
                'beliefs'=>[
                    'body'=>"Even well-intentioned goblins have trouble following the rules, meaning they’re rarely lawful. Most goblin adventurers are chaotic neutral or chaotic good. Organized worship confounds goblins, and most of them would rather pick their own deities, choosing powerful monsters, natural wonders, or anything else they find fascinating. Longshanks might have books upon books about the structures of divinity, but to a goblin, anything can be a god if you want it to. Goblins who spend time around people of other ancestries might adopt some of their beliefs, though, and many goblin adventurers adopt the worship of Cayden Cailean.",
                ],
                'names'=>[
                    'body'=>'Goblins keep their names simple. A good name should be easy to pronounce, short enough to shout without getting winded, and taste good to say. The namer often picks a word that rhymes with something they like so that writing songs is easier. Since there aren’t any real traditions regarding naming in goblin culture, children often name themselves once they’re old enough to do something resembling talking.',
                    'names'=>'Ak, Bokker, Frum, Guzmuk, Krobby, Loohi, Mazmord, Neeka, Omgot, Ranzak, Rickle, Tup, Wakla, Yonk, Zibini',
                ],
            ],
            'hit_points' => 6,
            'size' => 'Small',
            'speed' => 25,
            'ability_boosts' => ['Dexterity','Charisma','Free'], 
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
                'flavor'=>[
                    'body' => 'Dwarves have a well-earned reputation as a stoic and stern people, ensconced within citadels and cities carved from solid rock. While some see them as dour and humorless crafters of stone and metal, dwarves and those who have spent time among them understand their unbridled zeal for their work, caring far more about quality than quantity. To a stranger, they can seem untrusting and clannish, but to their friends and family, they are warm and caring, their halls filled with the sounds of laughter and hammers hitting anvils.',
                ],
                'top'=>[
                    'body' =>'Dwarves are slow to trust those outside their kin, but this wariness is not without reason. Dwarves have a long history of forced exile from ancestral holds and struggles against the depredations of savage foes, especially giants, goblinoids, orcs, and the horrors that dwell deep below the surface. While trust from a dwarf is hard-won, once gained it is as strong as iron.
                    If you want to play a character who is as hard as nails, a stubborn and unrelenting adventurer, with a mix of rugged toughness and deep wisdom—or at least dogged conviction—you should play a dwarf.',
                ],
                'youmight'=>[
                    'point1' =>'Strive to uphold your personal honor, no matter the situation.',
                    'point2' =>'Appreciate quality craftsmanship in all forms and insist upon it for all your gear.',
                    'point3' =>'Don’t waver or back down once you’ve set your mind to something.',
                ],
                'othersprobably'=>[
                    'point1' =>'See you as stubborn, though whether they see this as an asset or a detriment changes from one person to the next. ',
                    'point2' =>'Assume you are an expert in matters related to stonework, mining, precious metals, and gems. ',
                    'point3' =>'Recognize the deep connection you have with your family, heritage, and friends.',
                ],
                'physicaldescription'=>[
                    'body' =>'Dwarves are short and stocky, standing about a foot shorter than most humans. They have wide, compact bodies and burly frames. Dwarves of all genders pride themselves on the length of their hair, which they often braid into intricate patterns, some of which represent specific clans. A long beard is a sign of masculinity and honor among the dwarves, and thus a clean-shaven male dwarf is considered weak, untrustworthy, or worse. Dwarves typically reach physical adulthood around the age of 25, though their traditionalist culture places more value on completing coming of age ceremonies unique to each clan than reaching a certain age. A typical dwarf can live to around 350 years old.',
                ],
                'society'=>[
                    'body' =>"The ancient surface empire the dwarves once ruled fell long ago, overwhelmed by orc and goblinoid enemies. Today's dwarves today retain many of the qualities that propelled their people to greatness in ancient times: fierceness, gumption, and stubbornness in endeavors ranging from battle and craftsmanship to forging ties with family and friends. While the distance between their mountain Sky Citadels can create vast cultural divides between various dwarf clans, most dwarven societies share a number of similarities. Nearly all dwarven peoples share a passion for stonework, metalwork, and gem-cutting. Most are highly skilled at architecture and mining, and many share a hatred of giants, orcs, and goblinoids. Few dwarves are seen without their clan dagger strapped to their belt. This dagger is forged just before a dwarf's birth and bears the gemstone of their clan. A parent uses this dagger to cut the infant's umbilical cord, making it the first weapon to taste their blood.",
                ],
                'beliefs'=>[
                    'body'=>"Dwarves tend to value honor and closely follow the traditions of their clans and kingdoms. They have a strong sense of friendship and justice, though they are often very particular about who they consider a friend. They work hard and play harder— especially when strong ale is involved.The typical dwarf is lawful good or lawful neutral and prefers to worship deities of those alignments. Torag, god of dwarvenkind, is the dwarves' primary deity, though worship of Torag's family members is also common.",
                ],
                'names'=>[
                    'body'=>'Dwarves honor their children with names taken from ancestors or dwarven heroes, and it’s quite rare to invent a new name or to borrow a name from another culture for a child. When introducing themselves, dwarves tend to list their family and clan, plus any number of other familial connections and honorifics. Dwarven names usually contain hard consonants and are rarely more or fewer than two syllables.',
                    'names'=>'Agna, Bodill, Dolgrin, Edrukk, Grunyar, Ingra, Kazmuk, Kotri, Lupp, Morgrym, Rogar, Rusilka, Torra, Yangrit',
                ],
            ],
            'hit_points' => 10,
            'size' => 'Medium',
            'speed' => 20,
            'ability_boosts' => ['Constitution','Wisdom','Free'],
            'ability_flaw' => 'Charisma',
            'languages' => ['Common', 'Dwarven',"Additional languages equal to your Intelligence modifier (if it's positive). Choose from Gnomish, Goblin, Jotun, Orcish, Petran, Sakvroth, and any other languages to which you have access (such as the languages prevalent in your region)."],
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
            'description'=>"Dwarven heroes of old could shrug off their enemies' magic, and some of that resistance manifests in you. You gain the Call on Ancient Blood reaction.",
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
            'description'=>"Your ancestors were tomb guardians, and their power to ward off death passed on to you. If you roll a success on a saving throw against an effect that has the void trait or was created by an undead creature, you get a critical success instead.",
            'addon' => [
                    'name' => '',
                    'type' => 'Static',
                    'trigger' => "",
                    'body' => "",
                ],
        ]);

    }
}
