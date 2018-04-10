<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\DiscountCode\DiscountCode;
use Commercetools\Builder\DiscountCodeUpdateBuilder;

use Commercetools\Types\DiscountCode\DiscountCodeDraft;


class ResourceByProjectKeyDiscountCodes extends Resource
{
    /**
     * @return ResourceByProjectKeyDiscountCodesByID
     */
    public function withId($ID = null): ResourceByProjectKeyDiscountCodesByID {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyDiscountCodesByID($this->getUri() . '/{ID}', $args, $this->getMapper());
    }


    /**
     * @return ByProjectKeyDiscountCodesGet
     */
    public function get(): ByProjectKeyDiscountCodesGet {
        $args = $this->getArgs();
        return new ByProjectKeyDiscountCodesGet($args['projectKey']);
    }
    /**
     * @param DiscountCodeDraft $body
     * @return ByProjectKeyDiscountCodesPost
     */
    public function post(DiscountCodeDraft $body = null): ByProjectKeyDiscountCodesPost {
        $args = $this->getArgs();
        return new ByProjectKeyDiscountCodesPost($args['projectKey'], $body);
    }


    /**
     * @param DiscountCode $discountCode
     * @return DiscountCodeUpdateBuilder
     */
    public function update(DiscountCode $discountCode): DiscountCodeUpdateBuilder
    {
        $builder = new DiscountCodeUpdateBuilder(function(DiscountCodeUpdateBuilder $builder) { return $this->withId($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($discountCode);
        if ($discountCode instanceof MapperAware) {
            $builder->setMapper($discountCode->getMapper());
        }
        return $builder;
    }

    /**
     * @param DiscountCode $discountCode
     * @return ByProjectKeyDiscountCodesByIDDelete
     */
    public function delete(DiscountCode $discountCode): ByProjectKeyDiscountCodesByIDDelete
    {
        return $this->withId($discountCode->getId())->delete()->withVersion($discountCode->getVersion());
    }

    /**
     * @param DiscountCodeDraft|callable $discountCodeDraft builder function <code>
     *   function(DiscountCodeDraft $discountCodeDraft): DiscountCodeDraft {
     *     // modify $draft as needed
     *     return $discountCodeDraft;
     *   }
     *   </code>
     * @throws InvalidArgumentException
     * @return ByProjectKeyDiscountCodesPost
     */
    public function create($discountCodeDraft): ByProjectKeyDiscountCodesPost
    {
        if (is_callable($discountCodeDraft)) {
            $callback = $discountCodeDraft;
            $emptyDraft = $this->mapData(DiscountCodeDraft::class, null);
            $discountCodeDraft = $callback($emptyDraft);
        }
        if (!$discountCodeDraft instanceof DiscountCodeDraft) {
            throw new InvalidArgumentException();
        }
        return $this->post($discountCodeDraft);
    }
}
