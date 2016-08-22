<?php
// src/AppBundle/Entity/ChapterTranslation.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Gedmo\Translatable\Entity\MappedSuperclass\AbstractPersonalTranslation;

/**
 * @ORM\Entity(repositoryClass="Gedmo\Translatable\Entity\Repository\TranslationRepository")
 * @ORM\Table(name="chapters_translations", indexes={
 *      @ORM\Index(name="chapters_translations_idx", columns={"locale", "object_id", "field"})
 * })
 */
class ChapterTranslation extends AbstractPersonalTranslation
{
    public function __construct($locale = NULL, $field = NULL, $content = NULL)
    {
        $this
            ->setLocale($locale)
            ->setField($field)
            ->setContent($content)
        ;
    }

    /**
     * @ORM\ManyToOne(targetEntity="Chapter", inversedBy="translations")
     * @ORM\JoinColumn(name="object_id", referencedColumnName="id", onDelete="cascade")
     */
    protected $object;
}