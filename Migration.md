# Guide to migrate from the PHP SDK 1.x to the PHP SDK 2.x

This guide helps developers to migrate from the version 1.x to the version 2.x of PHP SDK.

## Table of content

* [Client Configuration and Creation](#client-configuration-and-creation)
* [Timeout Setting](#timeout-setting)
* [Headers](#headers)
* [Retry](#retry)
* [Draft Builder](#draft-builder)
* [Create Command](#create-command)
* [Create From Json](#create-from-json)
* [Update Command](#update-command)
* [Query - Get By Id](#query-get-by-id)
* [Query](#query)

<a id="client-configuration-and-creation"></a>
### Client Configuration and Creation
To setup the Client, in the 1.x we use the **Config** class to add the config data and then the **Client** class to create the Client from the Config.
In the 2.x the **ClientCredentialsConfig** class sets up the config data such as *clientId* and *clientSecret* and the **ClientFactory** creates the client.
The benefit of the 2.x, is that through the **ClientFactory** class, there is the possibility to easily set up the available Middlewares such as: the **LOGGER**, the **RETRY**, the **HEADER**.

1.x
```php
        $client = Client::ofConfig(
            ConfigV1::of()->setClientId(self::CLIENT_ID)->setClientSecret(self::CLIENT_SECRET)->setProject(self::PROJECT_KEY)
        );
        $request = RequestBuilder::of()->project()->get();
        $result = $request->mapFromResponse($response);
```
2.x
*For the rest of the Migration Guideline this part below will be replaced with* **$builder = $this->builder();**

In the below example the class *ClientCredentialsConfig* takes a default value for OAUTH_URL (see the class *ClientCredentials*), the same is for the class *Config* which takes a default value for the API_URL, but it can be defined in this way:
```php
        $authConfig = new ClientCredentialsConfig(new ClientCredentials(self::CLIENT_ID, self::CLIENT_SECRET), [], $oauthUrl = 'https://auth.us-central1.gcp.commercetools.com');
        $client = ClientFactory::of()->createGuzzleClient(new Config(['maxRetries' => 3], $apiUrl = 'https://api.us-central1.gcp.commercetools.com'), $authConfig);
        $apiRequestBuilder = new ApiRequestBuilder($client);
        $request = $apiRequestBuilder->withProjectKey(self::PROJECT_KEY)->get();
        $client = $request->execute();
```

<a id="timeout-setting"></a>
### Timeout Setting
In both versions is the **execute()** method which sets the timeout. In alternative, the 2.x version is able to set the timeout from the creation of the client through **ClientFactory** (the example is below).

1.x
```php
        $options = ['timeout' => '45'];
        $request = RequestBuilder::of()->categories()->query();
        $response = $this->execute($this->client(), $request, $options);
```
2.x
```php
        $options = ['timeout' => '45'];
        $request = $this->builder()->with()->categories()->get();
        $response = $request->execute($options);
```
There is the possibility in the v2 to set up the *Timout* at Client Creation level: the default value for the timeout is "60", see the *createGuzzleClientWithOptions()* method, otherwise it could be set up in the way described below:
```php
        $authConfig = new ClientCredentialsConfig(new ClientCredentials($this->clientId, $this->clientSecret));
        $client = ClientFactory::of()->createGuzzleClient(new Config(['maxRetries' => 3, 'timeout' => 45]), $authConfig);
        $apiRequestBuilder = new ApiRequestBuilder($client);
        $request = $apiRequestBuilder->withProjectKey($this->projectKey)->get();
        $client = $request->execute();
```

<a id="headers"></a>
### Headers
To set *Headers*, in the 1.x it is possible in the **execute()** method itself and in the 2.x, it can be directly set during the building request with the *withHeader* method.
Like as the [timeout](#timeout-setting), in alternative, the 2.x version is able to set the headers from the creation of the client through **ClientFactory** (the example is below).

1.x
```php
        $client = $this->client();
        /** @var CategoryDraft $categoryDraft */
        $request = RequestBuilder::of()->categories()->create($categoryDraft);
        $headers = ["foo" => "bar"];
        $response = $this->execute($client, $request, $headers);
        $result = $request->mapFromResponse($response);
```
2.x
```php
        $builder = $this->builder();
        $request = $builder->with()->categories()->get()->withHeader("foo", "bar");
        $result = $request->execute();
```
There is the possibility in the v2 to set up the *Header* at Client Creation level: the default value for the headers is an empty array, see the *createGuzzleClientWithOptions()* method, otherwise it could be set up in the way described below:
```php
        $authConfig = new ClientCredentialsConfig(new ClientCredentials($this->clientId, $this->clientSecret));
        $client = ClientFactory::of()->createGuzzleClient(new Config(['maxRetries' => 3, 'headers' => ["foo" => "bar"]]), $authConfig);
        $apiRequestBuilder = new ApiRequestBuilder($client);
        $request = $apiRequestBuilder->withProjectKey($this->projectKey)->get();
        $response = $request->execute();
```

<a id="retry"></a>
### Retry
In the 1.x, the *Retry* is handled through the client options, so with multidimensional array. And then, the creation of the Client, which here below there is another way to build it.

The 2.x instead, sets the *Retry* from the creation of the client through **ClientFactory**, with the help of the *createGuzzleClient* method, it's passed as a .

1.x
```php
        $config = Config::fromArray([
            'client_id' => self::CLIENT_ID,
            'client_secret' => self::CLIENT_SECRET,
            'project' => self::PROJECT_KEY
        ]);
        $maxRetries = 3;
        $clientOptions = [
            'middlewares' => [
                'retry' => Middleware::retry(
                    function ($retries, RequestInterface $request, ResponseInterface $response = null, RequestException $error = null) use ($maxRetries) {
                        return $retries < $maxRetries && ($error instanceof ConnectException || $response && $response->getStatusCode() >= 500);
                    }
                )
            ]
        ];
        $config->setClientOptions($clientOptions);
        $client = ClientFactory::of()->createClient($config, new Logger('test'));
```
2.x
```php
        $authConfig = new ClientCredentialsConfig(new ClientCredentials(self::CLIENT_ID, self::CLIENT_SECRET));
        $client = ClientFactory::of()->createGuzzleClient(new Config(['maxRetries' => 3, 'timeout' => 45]), $authConfig);
        $apiRequestBuilder = new ApiRequestBuilder($client);
        $request = $apiRequestBuilder->withProjectKey(self::PROJECT_KEY)->get();
        $result = $request->execute();
```

<a id="draft-builder"></a>
### Draft Builder
About the *DraftBuilder* the main difference is that in the 2.x we introduced the **build()** method to create objects (in this case the *DraftBuilder* object).
As can be seen below, setters are being replaced by withers methods, thanks to them now the class APIs are more stable no matter how many properties are required

1.x
```php
        $categoryDraft = CategoryDraft::ofNameAndSlug(LocalizedString::ofLangAndText('en', 'name'), LocalizedString::ofLangAndText('en', 'slug'))
                                ->setMetaDescription(LocalizedString::ofLangAndText('en', 'metaDescription'))
                                ->setMetaTitle(LocalizedString::ofLangAndText('en', 'metaTitle'))
                                ->setMetaKeywords(LocalizedString::ofLangAndText('en', 'metaKeywords'))
                                ->setExternalId("externalId");
```
2.x
```php
        $categoryDraft = CategoryDraftBuilder::of()
                                ->withName(LocalizedStringBuilder::of()->put('en', 'name')->build())
                                ->withSlug(LocalizedStringBuilder::of()->put('en', 'slug')->build())
                                ->withMetaDescription(LocalizedStringBuilder::of()->put('en', 'metaDescription')->build())
                                ->withMetaTitle(LocalizedStringBuilder::of()->put('en', 'metaTitle')->build())
                                ->withMetaKeywords(LocalizedStringBuilder::of()->put('en', 'metaKeywords')->build())
                                ->withExternalId("externalId")
                                ->build();
```

<a id="create-command"></a>
### Create Command
In the 2.x, we replaced the **RequestBuilder** class with **ApiRequestBuilder** to build the request (see [Client Configuration and Creation](#client-configuration-and-creation) section). 
There are not dedicated methods to build a request, like in this case the *create* method, but to have a request, it needs to have a draft to build and which is passed into the *post()* method.
In details:
- Call the **with()** method from the ApiRequestBuilder, it will get the Project Key; 
- Choose the Resource/Endpoint/Domain to call in this case is */categories* (the method to call is **categories()**);
- Call the method **post()** and passing in it the draft object (in this case the CategoryDraft) to create a request (in this case **ByProjectKeyCategoriesPost** request);
- Run the **execute()** method to create a new object (in this case a new Category object).

Here below the differences between the two versions:

1.x
```php
        $client = $this->client();
        $categoryDraft = CategoryDraft::of()
                                ->setName(LocalizedString::ofLangAndText('en', $this->uniqueString()))
                                ->setSlug(LocalizedString::ofLangAndText('en', $this->uniqueString()))
                                ->setKey($this->uniqueString());
        $request = RequestBuilder::of()->categories()->create($categoryDraft);
        $response = $this->execute($client, $request);
        $result = $request->mapFromResponse($response);
```
2.x
```php
        $builder = $this->builder();
        $categoryDraft = CategoryDraftBuilder::of()
                                ->withName(LocalizedStringBuilder::of()->put('en', $this->uniqueString())->build())
                                ->withSlug(LocalizedStringBuilder::of()->put('en', $this->uniqueString())->build())
                                ->withKey($this->uniqueString())
                                ->build();
        $request = $builder->with()->categories()->post($categoryDraft);
        $result = $request->execute();
```

<a id="create-from-json"></a>
### Create From Json
The main difference is how to build the request, as explained in the [Create Command](#create-command) and the usage of *CategoryDraftModel* class to create the draft from the Json file.

1.x
```php
        $client = $this->client();
        $categoryDraft = CategoryDraft::fromArray(json_decode(file_get_contents(__DIR__ . "/categoryDraft.json")));    
        $request = RequestBuilder::of()->categories()->create($categoryDraft);
        $response = $this->execute($client, $request);
        $result = $request->mapFromResponse($response);
```
2.x
```php
        $builder = $this->builder();
        /** @var CategoryDraft $categoryDraft */
        $categoryDraft = CategoryDraftModel::fromArray(json_decode(file_get_contents(__DIR__ . "/categoryDraft.json"), true));
        $request = $builder->with()->categories()->post($categoryDraft);
        $result = $request->execute();
```

<a id="update-command"></a>
### Update Command
Like the [Create Command](#create-command), there are not dedicate methods to build a request, like in this case the *update* method.
So to create this kind of requests, like the example below:
- Create the Update Builder object, having the version (using *withVersion()* method) from the object that has to be modified; 
- Pass all the Update Action Collections in the *withActions()* method, which are needed to be executed;   
- Now the creation of the request:
  - follow the first 2 points of the [Create Command](#create-command)
  - Call the *withId() or withKey()* methods to select the object to update,
  - Call the *post()* method where passing the Update Builder object, in this case *CategoryUpdateBuilder*.

Here the differences:

1.x
```php
        $client = $this->client();
        $newName = LocalizedString::ofLangAndText('en', 'name');
        $updateAction = CategoryChangeNameAction::ofName($newName);
        /** @var Category $category */
        $request = RequestBuilder::of()->categories()->update($category)
                    ->addAction($updateAction);
        $response = $this->execute($client, $request);
        $result = $request->mapFromResponse($response);
```
2.x
```php
        $builder = $this->builder();
        $newName = LocalizedStringBuilder::of()->put('en', "new-name")->build();
        /** @var Category $category */
        $request = $builder->with()->categories()->withId($category->getId())
            ->post(
                CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions(
                        CategoryUpdateActionCollection::of()->add(CategoryChangeNameActionBuilder::of()->withName($newName)->build())
                    )->build()
            );
        $categoryUpdated = $request->execute();
```

<a id="query-get-by-id"></a>
### Query - Get By Id
The *Query by Id* command is slightly different compared to the [Create Command](#create-command) and to the [Update Command](#update-command).
Here how to create the related request:
- Follow the first 2 points of the [Create Command](#create-command);
- Call the *withId()* method to select the Id that we are looking for;
- Call the *get()* method to retrieve the related object of our request, which in the case below is *ByProjectKeyCategoriesByIDGet* object;
- Then it's possible to add other kind of filters such as *withExpand()*, of course it depends about the structure of our APIs.

1.x
```php
        $client = $this->client();
        /** @var Category $category */
        $request = RequestBuilder::of()->categories()->getById($category->getId())->expand('parent');
        $response = $this->execute($client, $request);
        $result = $request->mapFromResponse($response);
```
2.x
```php
        $builder = $this->builder();
        /** @var CategoryBuilder $category */
        $request = $builder->with()->categories()->withId($category->getId())->get()->withExpand('parent');
        $result = $request->execute();
```

<a id="query"></a>
### Query
Here another example to retrieve an object from the request. In the 2.x version, there is the possibility to use just the *withWhere()* method or the best option is filtering it using the static parameters with the help of *withWhere()->withPredicateVar()* methods. 

1.x
```php
        $client = $this->client();
        $request = RequestBuilder::of()->categories()->query()->where('id = :id', ['id' => $category->getId()]);
        $response = $this->execute($client, $request);
        $result = $request->mapFromResponse($response);
```
2.x
```php
        $builder = $this->builder();
        $request = $builder->with()->categories()->get()->withWhere("key = :key")->withPredicateVar("key", $category->getKey());
        $result = $request->execute();
```
