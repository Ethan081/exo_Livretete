<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", name="author")
     */
    private $author;

    /**
     * @ORM\Column(type="string", name="category")
     */
    private $category;

    /**
     * @ORM\Column(type="text", name="description")
     */
    private $decription;

    //je cree une nouvelle column dans dans ma table Article.
    /**
     * @ORM\Column(type="date", name="date_of_publication")
     */
    private $date_of_publication;

}