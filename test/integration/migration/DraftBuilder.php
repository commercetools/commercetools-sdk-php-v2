<?php


namespace Commercetools\IntegrationTest\migration;

use Commercetools\Api\Models\Category\CategoryDraftBuilder;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Core\Model\Category\CategoryDraft;
use Commercetools\Core\Model\Common\LocalizedString;

class DraftBuilder implements MigrationInterface
{
    public function v1()
    {
        $categoryDraft = CategoryDraft::ofNameAndSlug(LocalizedString::ofLangAndText('en', 'name'), LocalizedString::ofLangAndText('en', 'slug'))
                                ->setMetaDescription(LocalizedString::ofLangAndText('en', 'metaDescription'))
                                ->setMetaTitle(LocalizedString::ofLangAndText('en', 'metaTitle'))
                                ->setMetaKeywords(LocalizedString::ofLangAndText('en', 'metaKeywords'))
                                ->setExternalId("externalId");

        return $categoryDraft;
    }

    public function v2()
    {
        $categoryDraft = CategoryDraftBuilder::of()
                                ->withName(LocalizedStringBuilder::of()->put('en', 'name')->build())
                                ->withSlug(LocalizedStringBuilder::of()->put('en', 'slug')->build())
                                ->withMetaDescription(LocalizedStringBuilder::of()->put('en', 'metaDescription')->build())
                                ->withMetaTitle(LocalizedStringBuilder::of()->put('en', 'metaTitle')->build())
                                ->withMetaKeywords(LocalizedStringBuilder::of()->put('en', 'metaKeywords')->build())
                                ->withExternalId("externalId")
                                ->build();

        return $categoryDraft;
    }
}
