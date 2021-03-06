<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi\JsonSchema\Version3\Model;

class RequestBody extends \ArrayObject
{
    /**
     * @var string
     */
    protected $description;
    /**
     * @var MediaTypeWithExample[]|MediaTypeWithExamples[]
     */
    protected $content;
    /**
     * @var bool
     */
    protected $required;

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return MediaTypeWithExample[]|MediaTypeWithExamples[]
     */
    public function getContent(): ?\ArrayObject
    {
        return $this->content;
    }

    /**
     * @param MediaTypeWithExample[]|MediaTypeWithExamples[] $content
     *
     * @return self
     */
    public function setContent(?\ArrayObject $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return bool
     */
    public function getRequired(): ?bool
    {
        return $this->required;
    }

    /**
     * @param bool $required
     *
     * @return self
     */
    public function setRequired(?bool $required): self
    {
        $this->required = $required;

        return $this;
    }
}
