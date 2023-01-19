<?php

class Book
{
    private ?string $id;
    private ?string $name;
    private ?string $description;
    private ?int $page_count;
    private ?string $author_id;

    /**
     * @param string|null $id
     * @param string|null $name
     * @param string|null $description
     * @param int|null $page_count
     * @param string|null $author_id
     */
    public function __construct(?string $id, ?string $name, ?string $description, ?int $page_count, ?string $author_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->page_count = $page_count;
        $this->author_id = $author_id;
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

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return int|null
     */
    public function getPageCount(): ?int
    {
        return $this->page_count;
    }

    /**
     * @param int|null $page_count
     */
    public function setPageCount(?int $page_count): void
    {
        $this->page_count = $page_count;
    }

    /**
     * @return string|null
     */
    public function getAuthorId(): ?string
    {
        return $this->author_id;
    }

    /**
     * @param string|null $author_id
     */
    public function setAuthorId(?string $author_id): void
    {
        $this->author_id = $author_id;
    }





}