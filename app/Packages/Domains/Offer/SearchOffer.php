<?php

namespace App\Packages\Domains\Offer;

use Carbon\Carbon;

/**
* Class SearchOffer
* @package App\Packages\Domains\Offer
*/
class SearchOffer
{
    /**
     * @var int
     */
    private int $id;

    /**
    * @var string
    */
    private string $name;

    /**
    * @var string
    */
    private string $type;

    /**
    * @var int
    */
    private int $categoryId;

    /**
    * @var int
    */
    private int $prefectureId;

    /**
    * @var string|null
    */
    private ?string $file;

    /**
    * @var string|null
    */
    private ?string $detail;

    /**
     * @var int
     */
    private int $qualificationId;

    /**
     * @var string|null
     */
    private ?string $winningBidder;

    /**
     * @var Carbon|null
     */
    private ?Carbon $announcementDate;

    /**
     * @var Carbon|null
     */
    private ?Carbon $bidDate;

    /**
     * SearchOffer constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
      $this->id = $data['id'];
      $this->name = $data['name'];
      $this->type = $data['type'];
      $this->categoryId = $data['category_id'];
      $this->prefectureId = $data['prefecture_id'];
      $this->file = $data['file'] ?? null;
      $this->detail = $data['detail'] ?? null;
      $this->qualificationId = $data['qualification_id'];
      $this->winningBidder = $data['winningBidder'] ?? null;
      $this->announcementDate = $this->toCarbon($data['announcementDate']);
      $this->bidDate = $this->toCarbon($data['bidDate']);
    }

    /**
     * @param string|null $date
     * @return Carbon|null
     */
    private function toCarbon(?string $date) : ?Carbon
    {
      if (empty($date)) {
        return null;
      }
      return new Carbon($date);
    }

    public function getName() : string
    {
      return $this->name;
    }
}

