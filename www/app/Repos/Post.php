<?php


namespace App\Repos;

class Post extends Repository
{

    private string $title;
    private string $slug;
    private string $content;
    private int $is_headline;
    private int $user_id;
    private string $created_at;
    private string $updated_at;

    public function getPosts(): array
    {
        return $this->db()->query('select * from posts order by  created_at desc')
            ->fetchAll();
    }

    public function getPost(string $slug)
    {
        $sql = 'select * from posts where slug=?';
        $stmt = $this->db()->prepare($sql);
        $stmt->execute([$slug]);
        return $stmt->fetch();

    }

    public function savePost()
    {

        $params = [
            $this->getTitle(),
            $this->getSlug(),
            $this->getContent(),
            $this->getIsHeadline(),
            $this->getUserId(),
            $this->getCreatedAt(),
            $this->getUpdatedAt(),
        ];
        $sql = "insert into posts 
                (title, slug, content,is_headline,user_id,created_at,updated_at) 
                values (?,?,?,?,?,?,?)";
        $stmt = $this->db()->prepare($sql);

        return $stmt->execute($params);

    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Post
     */
    public function setTitle(string $title): Post
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Post
     */
    public function setContent(string $content): Post
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsHeadline(): int
    {
        return $this->is_headline;
    }

    /**
     * @param int $is_headline
     * @return Post
     */
    public function setIsHeadline(int $is_headline): Post
    {
        $this->is_headline = $is_headline;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @param int $user_id
     * @return Post
     */
    public function setUserId(int $user_id): Post
    {
        $this->user_id = $user_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    /**
     * @param string $created_at
     * @return Post
     */
    public function setCreatedAt(string $created_at): Post
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    /**
     * @param string $updated_at
     * @return Post
     */
    public function setUpdatedAt(string $updated_at): Post
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     * @return Post
     */
    public function setSlug(string $slug): Post
    {
        $this->slug = $slug;
        return $this;
    }


}