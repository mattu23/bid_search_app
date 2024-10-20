<?php

namespace App\Packages\Domains\Prefecture;

class Prefecture
{
  /**
   * @var int
   */
  private int $id;

  /**
   * @var string
   */
  private string $name;
  

  public function __construct(int $id, string $name)
  {
    $this->id = $id;
    $this->name = $name;
  }

  public function getId(): int
  {
    return $this->id;
  }

  public function getName(): string
  {
    return $this->name;
  }
}
