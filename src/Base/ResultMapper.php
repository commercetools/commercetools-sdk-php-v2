<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Base;

use Commercetools\Client\ApiRequest;
use Psr\Http\Message\ResponseInterface;

class ResultMapper implements Mapper
{
    private $classMap;

    /**
     * @param ClassMap $classMap
     */
    public function __construct(ClassMap $classMap)
    {
        $this->classMap = $classMap;
    }

    public function map(ApiRequest $request, ResponseInterface $response)
    {
        return $this->mapResponseToClass($request::RESULT_TYPE, $response);
    }

    public function mapData(string $class, $data)
    {
        $type = $this->classMap->getMappedClass($class);
        if (is_null($data)) {
            $object = new $type();
        } else {
            $object = new $type($data);
        }
        if ($object instanceof MapperAware) {
            $object->setMapper($this);
        }

        return $object;
    }

    public function resolveDiscriminator(string $class, $discriminator, array $subTypes, array $data): string
    {
        $discriminatorValue = isset($data[$discriminator]) ? $data[$discriminator] : '';
        return isset($subTypes[$discriminatorValue]) ? $subTypes[$discriminatorValue] : $class;
    }

    private function mapResponseToClass(string $class, ResponseInterface $response)
    {
        $body = (string)$response->getBody();
        $json = json_decode($body, true);
        return $this->mapData($class, $json);
    }
}
