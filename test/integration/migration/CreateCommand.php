<?php


namespace Commercetools\IntegrationTest\migration;

use Commercetools\Api\Models\Category\CategoryDraftBuilder;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Core\Builder\Request\RequestBuilder;
use Commercetools\Core\Model\Category\CategoryDraft;
use Commercetools\Core\Model\Common\LocalizedString;

class CreateCommand extends MigrationService implements MigrationInterface
{
    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function v1()
    {
        $client = $this->clientV1();
        $categoryDraft = CategoryDraft::of()
                                ->setName(LocalizedString::ofLangAndText('en', $this->uniqueString()))
                                ->setSlug(LocalizedString::ofLangAndText('en', $this->uniqueString()))
                                ->setKey($this->uniqueString());
        $request = RequestBuilder::of()->categories()->create($categoryDraft);
        $response = $this->executeV1($client, $request);
        $result = $request->mapFromResponse($response);

        return $result;
    }

    /**
     * @throws \Commercetools\Exception\InvalidArgumentException
     */
    public function v2()
    {
        $builder = $this->builderV2();
        $categoryDraft = CategoryDraftBuilder::of()
                                ->withName(LocalizedStringBuilder::of()->put('en', $this->uniqueString())->build())
                                ->withSlug(LocalizedStringBuilder::of()->put('en', $this->uniqueString())->build())
                                ->withKey($this->uniqueString())
                                ->build();
        $request = $builder->with()->categories()->post($categoryDraft);

        return $request->execute();
    }
}
