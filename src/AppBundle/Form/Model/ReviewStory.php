<?php
// src/AppBundle/Form/Model/ReviewStory.php
namespace AppBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;

use AppBundle\Entity\Review;

class ReviewStory
{
    /**
     * @Assert\Type(type="AppBundle\Entity\Review")
     * @Assert\Valid()
     */
    protected $review;

    public function setReview(Review $review)
    {
        $this->review = $review;
    }

    public function getReview()
    {
        return $this->review;
    }
}