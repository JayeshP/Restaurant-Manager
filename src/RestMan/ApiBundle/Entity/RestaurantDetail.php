<?php

namespace RestMan\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RestaurantDetail
 *
 * @ORM\Table(name="restaurant_details")
 * @ORM\Entity(repositoryClass="RestMan\ApiBundle\Entity\RestaurantDetailRepository")
 */
class RestaurantDetail
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
     * @ORM\OneToOne(targetEntity="Restaurant")
     * @ORM\JoinColumn(name="restaurant_id", referencedColumnName="id")
     */
    private $restaurantId;

    /**
     * @var string
     *
     * @ORM\Column(name="cost_for_2", type="decimal")
     */
    private $costFor2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lunch_start_time", type="time")
     */
    private $lunchStartTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lunch_close_time", type="time")
     */
    private $lunchCloseTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dinner_start_time", type="time")
     */
    private $dinnerStartTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dinner_close_time", type="time")
     */
    private $dinnerCloseTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="delivery_time", type="time")
     */
    private $deliveryTime;

    /**
     * @var string
     *
     * @ORM\Column(name="min_order", type="decimal")
     */
    private $minOrder;


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
     * @return RestaurantDetail
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
     * Set costFor2
     *
     * @param string $costFor2
     * @return RestaurantDetail
     */
    public function setCostFor2($costFor2)
    {
        $this->costFor2 = $costFor2;

        return $this;
    }

    /**
     * Get costFor2
     *
     * @return string 
     */
    public function getCostFor2()
    {
        return $this->costFor2;
    }

    /**
     * Set openingTime
     *
     * @param \DateTime $openingTime
     * @return RestaurantDetail
     */
    public function setOpeningTime($openingTime)
    {
        $this->openingTime = $openingTime;

        return $this;
    }

    /**
     * Get openingTime
     *
     * @return \DateTime 
     */
    public function getOpeningTime()
    {
        return $this->openingTime;
    }

    /**
     * Set closingTime
     *
     * @param \DateTime $closingTime
     * @return RestaurantDetail
     */
    public function setClosingTime($closingTime)
    {
        $this->closingTime = $closingTime;

        return $this;
    }

    /**
     * Get closingTime
     *
     * @return \DateTime 
     */
    public function getClosingTime()
    {
        return $this->closingTime;
    }

    /**
     * Set deliveryTime
     *
     * @param \DateTime $deliveryTime
     * @return RestaurantDetail
     */
    public function setDeliveryTime($deliveryTime)
    {
        $this->deliveryTime = $deliveryTime;

        return $this;
    }

    /**
     * Get deliveryTime
     *
     * @return \DateTime 
     */
    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }

    /**
     * Set minOrder
     *
     * @param string $minOrder
     * @return RestaurantDetail
     */
    public function setMinOrder($minOrder)
    {
        $this->minOrder = $minOrder;

        return $this;
    }

    /**
     * Get minOrder
     *
     * @return string 
     */
    public function getMinOrder()
    {
        return $this->minOrder;
    }

    /**
     * Set lunchStartTime
     *
     * @param \DateTime $lunchStartTime
     * @return RestaurantDetail
     */
    public function setLunchStartTime($lunchStartTime)
    {
        $this->lunchStartTime = $lunchStartTime;

        return $this;
    }

    /**
     * Get lunchStartTime
     *
     * @return \DateTime 
     */
    public function getLunchStartTime()
    {
        return $this->lunchStartTime;
    }

    /**
     * Set lunchCloseTime
     *
     * @param \DateTime $lunchCloseTime
     * @return RestaurantDetail
     */
    public function setLunchCloseTime($lunchCloseTime)
    {
        $this->lunchCloseTime = $lunchCloseTime;

        return $this;
    }

    /**
     * Get lunchCloseTime
     *
     * @return \DateTime 
     */
    public function getLunchCloseTime()
    {
        return $this->lunchCloseTime;
    }

    /**
     * Set dinnerStartTime
     *
     * @param \DateTime $dinnerStartTime
     * @return RestaurantDetail
     */
    public function setDinnerStartTime($dinnerStartTime)
    {
        $this->dinnerStartTime = $dinnerStartTime;

        return $this;
    }

    /**
     * Get dinnerStartTime
     *
     * @return \DateTime 
     */
    public function getDinnerStartTime()
    {
        return $this->dinnerStartTime;
    }

    /**
     * Set dinnerCloseTime
     *
     * @param \DateTime $dinnerCloseTime
     * @return RestaurantDetail
     */
    public function setDinnerCloseTime($dinnerCloseTime)
    {
        $this->dinnerCloseTime = $dinnerCloseTime;

        return $this;
    }

    /**
     * Get dinnerCloseTime
     *
     * @return \DateTime 
     */
    public function getDinnerCloseTime()
    {
        return $this->dinnerCloseTime;
    }
}
