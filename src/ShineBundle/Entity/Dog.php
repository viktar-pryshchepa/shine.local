<?php
/**
 * Created by PhpStorm.
 * User: viktar
 * Date: 09.11.2015
 * Time: 23:40
 */

namespace ShineBundle\Entity;


class Dog {

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $birth;

    /**
     * @var \ShineBundle\Entity\Breed
     */
    private $breed;


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
     * @return Dog
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
     * Set description
     *
     * @param string $description
     *
     * @return Dog
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set birth
     *
     * @param \DateTime $birth
     *
     * @return Dog
     */
    public function setBirth($birth)
    {
        $this->birth = $birth;

        return $this;
    }

    /**
     * Get birth
     *
     * @return \DateTime
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * Set breed
     *
     * @param \ShineBundle\Entity\Breed $breed
     *
     * @return Dog
     */
    public function setBreed(\ShineBundle\Entity\Breed $breed = null)
    {
        $this->breed = $breed;

        return $this;
    }

    /**
     * Get breed
     *
     * @return \ShineBundle\Entity\Breed
     */
    public function getBreed()
    {
        return $this->breed;
    }
}
