<?php

namespace Jane\OpenApi\Tests\Expected\Endpoint;

class GetTestById extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $id;
    /**
     * 
     *
     * @param int $id id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/test/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\OpenApi\Tests\Expected\Exception\GetTestByIdBadRequestException
     * @throws \Jane\OpenApi\Tests\Expected\Exception\GetTestByIdNotFoundException
     *
     * @return null|\Jane\OpenApi\Tests\Expected\Model\TestIdGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Jane\\OpenApi\\Tests\\Expected\\Model\\TestIdGetResponse200', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Jane\OpenApi\Tests\Expected\Exception\GetTestByIdBadRequestException($serializer->deserialize($body, 'Jane\\OpenApi\\Tests\\Expected\\Model\\Error', 'json'));
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Jane\OpenApi\Tests\Expected\Exception\GetTestByIdNotFoundException($serializer->deserialize($body, 'Jane\\OpenApi\\Tests\\Expected\\Model\\Error', 'json'));
        }
    }
}