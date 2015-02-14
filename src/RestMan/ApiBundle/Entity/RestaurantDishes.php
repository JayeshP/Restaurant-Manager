<?php

namespace RestMan\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RestaurantDishes
 *
 * @ORM\Table(name="restaurant_dishes")
 * @ORM\Entity(repositoryClass="RestMan\ApiBundle\Entity\RestaurantDishesRepository")
 */
class RestaurantDishes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Restaurant")
     * @ORM\JoinColumn(name="restaurant_id", referencedColumnName="id")
     */
    private $restaurantId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="category_veg_nonveg", type="string", length=255)
     */
    private $categoryVegNonveg;


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
     * Set restaurantId
     *
     * @param integer $restaurantId
     * @return RestaurantDishes
     */
    public function setRestaurantId($restaurantId)
    {
        $this->restaurantId = $restaurantId;

        return $this;
    }

    /**
     * Get restaurantId
     *
     * @return integer 
     */
    public function getRestaurantId()
    {
        return $this->restaurantId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return RestaurantDishes
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return RestaurantDishes
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set categoryVegNonveg
     *
     * @param string $categoryVegNonveg
     * @return RestaurantDishes
     */
    public function setCategoryVegNonveg($categoryVegNonveg)
    {
        $this->categoryVegNonveg = $categoryVegNonveg;

        return $this;
    }

    /**
     * Get categoryVegNonveg
     *
     * @return string 
     */
    public function getCategoryVegNonveg()
    {
        return $this->categoryVegNonveg;
    }
}
