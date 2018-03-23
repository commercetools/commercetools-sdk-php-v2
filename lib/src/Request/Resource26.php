<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Types\DiscountCode\DiscountCode;
use Commercetools\Builder\DiscountCodeUpdateBuilder;

use Commercetools\Types\DiscountCode\DiscountCodeDraft;


class Resource26 extends Resource
{
    /**
     * @return Resource27
     */
    public function withIDValue($ID = null): Resource27 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource27($this->getUri() . '/{ID}', $args, $this->getMapper());
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
    public function post(DiscountCodeDraft $body): ByProjectKeyDiscountCodesPost {
        $args = $this->getArgs();
        return new ByProjectKeyDiscountCodesPost($args['projectKey'], $body);
    }


    public function update(DiscountCode $discountCode)
    {
        $builder = new DiscountCodeUpdateBuilder(function (DiscountCodeUpdateBuilder $builder) { return $this->withIDValue($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($discountCode);
        if ($discountCode instanceof MapperAware) {
            $builder->setMapper($discountCode->getMapper());
        }
        return $builder;
    }

    public function delete(DiscountCode $discountCode)
    {
        return $this->withIDValue($discountCode->getId())->delete()->withVersion($discountCode->getVersion());
    }

    /**
     * @param DiscountCodeDraft|callable $discountCodeDraftDraft builder function <code>
     *   function (DiscountCodeDraft $discountCodeDraft): DiscountCodeDraft {
     *     // modify $draft as needed
     *     return $discountCodeDraft;
     *   }
     *   </code>
     */
    public function create($discountCodeDraft)
    {
        if (is_callable($discountCodeDraft)) {
            $callback = $discountCodeDraft;
            $emptyDraft = $this->mapData(DiscountCodeDraft::class, null);
            $discountCodeDraft = $callback($emptyDraft);
        }
        if (!$discountCodeDraft instanceof DiscountCodeDraft) {
            throw new \InvalidArgumentException();
        }
        return $this->post($discountCodeDraft);
    }
}
