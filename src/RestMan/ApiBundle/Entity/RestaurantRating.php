<?php

namespace RestMan\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RestaurantRating
 *
 * @ORM\Table(name="restaurant_ratings")
 * @ORM\Entity(repositoryClass="RestMan\ApiBundle\Entity\RestaurantRatingRepository")
 */
class RestaurantRating
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
     * @ORM\ManyToOne(targetEntity="UserProfile")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Restaurant")
     * @ORM\JoinColumn(name="restaurant_id", referencedColumnName="id")
     */
    private $restaurantId;

    /**
     * @var float
     *
     * @ORM\Column(name="rating_out_of_5", type="float")
     */
    private $ratingOutOf5;


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
     * Set userId
     *
     * @param integer $userId
     * @return RestaurantRating
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set restaurantId
     *
     * @param integer $restaurantId
     * @return RestaurantRating
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
     * Set ratingOutOf5
     *
     * @param float $ratingOutOf5
     * @return RestaurantRating
     */
    public function setRatingOutOf5($ratingOutOf5)
    {
        $this->ratingOutOf5 = $ratingOutOf5;

        return $this;
    }

    /**
     * Get ratingOutOf5
     *
     * @return float 
     */
    public function getRatingOutOf5()
    {
        return $this->ratingOutOf5;
    }
}
