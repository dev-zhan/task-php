<?php

class Author
{
    private ?string $id;
    private ?string $name;

    /**
     * @param string|null $id
     * @param string|null $name
     */
    public function __construct(?string $id, ?string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }


}