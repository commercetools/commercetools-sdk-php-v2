<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

interface JavascriptPredicate extends Predicate
{
    const FIELD_EXPRESSION = 'expression';

    /**
     * <p>A javscript boolean expression.</p>.
     *
     * @return null|string
     */
    public function getExpression();

    public function setExpression(?string $expression): void;
}
