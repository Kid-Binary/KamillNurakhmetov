<?php
// src/AppBundle/DataFixtures/ORM/LoadAuthor.php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture,
    Doctrine\Common\DataFixtures\OrderedFixtureInterface,
    Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\Author;

class LoadAuthor extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $author = (new Author)
            ->setTitle("Биография")
            ->setText(
                "<p>Родился в прошлом веке, в апреле 1960 года. После окончания десяти классов ушел в Советскую Армию. Служил за рубежом в разведроте. После армии получил Высшее образование, закончив учебу на историческом факультете Государственного Университета. В связи с работой, пришлось много путешествовать, побывал в 27 странах, некоторое время проживал в США и Великобритании.</p>
                 <p>Писал много, в связи с определенными причинами, публиковать удавалось только 10% . Но времена изменились и теперь, все, что написано с 1979 года увидит мир в полном объеме после новой редакции и нового взгляда на ближайшее прошлое.</p>
                 <p>Интересуюсь Астрономией, Эниологией, с удовольствием глубоко изучаю биографии великих людей , которым удалось изменить политические системы государств, тем самым изменив мир. Это биографии Наполеона, Оливера Кромвеля, Ленина, Навуходоносора, Сталина, Вашингтона, Кастро, Черчилля, Александра Македонского и сотен других.</p>
                 <p>Тридцать лет изучал тонкости специализированной литературы, анализировал, постепенно перенося свои мысли на бумагу, выработав свой, не похожий ни на кого, стиль изложения, что подтверждают многочисленные читатели в своих рецензиях и письмах. Диапазон тем варьируется от мистики любви до невероятных поворотов судеб героев, людей мыслящих и неординарных.</p>
                 <p>Все, что описано в моих романах и новеллах, однажды может повториться с читателем! Никто не знает будущего!</p>"
            )
            ->setWorksNumber(53)
            ->setReadersNumber(8153)
        ;
        $author->setRawText(
            $author->getText()
        );
        $manager->persist($author);

        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}