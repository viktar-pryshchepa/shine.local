<?php
/**
 * Created by PhpStorm.
 * User: viktar
 * Date: 09.11.2015
 * Time: 23:37
 */

namespace ShineBundle\Entity;


class Breed {

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Breed
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $dogs;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dogs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add dog
     *
     * @param \ShineBundle\Entity\Dog $dog
     *
     * @return Breed
     */
    public function addDog(\ShineBundle\Entity\Dog $dog)
    {
        $this->dogs[] = $dog;

        return $this;
    }

    /**
     * Remove dog
     *
     * @param \ShineBundle\Entity\Dog $dog
     */
    public function removeDog(\ShineBundle\Entity\Dog $dog)
    {
        $this->dogs->removeElement($dog);
    }

    /**
     * Get dogs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDogs()
    {
        return $this->dogs;
    }
}
