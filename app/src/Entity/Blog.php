<?php
namespace Entity;

class Blog
{
    
    private int $id;

  
    private string $title;

   
    private string $content;

   
    private string $author;

    private string $slug;

   
    private datetime $created;


    public function getId(): ?int
    {
        return $this->id;
    }
    public function gettitle(): ?string
    {
        return $this->title;
    }
    public function settitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }



    public function getContent(): ?string
    {
        return $this->content;
    }
    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }
    public function setAuthor(string $author): self
    {
        $this->author = $author;
        return $this;
    }


    public function getSlug(): ?string
    {
        return $this->slug;
    }
    public function setSlug(string $slug): self
    {
        $this->slug = $slug;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created;
    }
    public function setCretedAt(?\DateTimeInterface $created): self
    {
        $this->created = $created;
        return $this;
    }
}