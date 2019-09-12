<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Base\Builder;

/**
 * @implements Builder<JavascriptPredicate>
 */
final class JavascriptPredicateBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?string
     */
    private $expression;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <p>A javscript boolean expression.</p>.
     *
     * @return null|string
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExpression(?string $expression)
    {
        $this->expression = $expression;

        return $this;
    }

    public function build(): JavascriptPredicate
    {
        return new JavascriptPredicateModel(
            $this->type,
            $this->expression
        );
    }

    public static function of(): JavascriptPredicateBuilder
    {
        return new self();
    }
}
