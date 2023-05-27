<?php
namespace Entity;

class Comments
{
    
    private int $id;

  
    private int $post_id;

   
    private string $content;

   
    private string $author;

  
    private datetime $createdat;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getpost_id(): ?int
    {
        return $this->post_id;
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