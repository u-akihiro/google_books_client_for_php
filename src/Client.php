<?php
namespace GoogleBooksAPI;

class Client
{
    const ENDPOINT = "https://content.googleapis.com/books/v1/volumes";

    private $httpClient;
    private $queryStrings = [];
    private $startIndex = 1;
    private $maxResults = 20;

    public function __construct()
    {
        $this->httpClient = new \GuzzleHttp\Client(['base_uri' => self::ENDPOINT]);
    }

    public function setStartIndex($idx = 1)
    {
        $this->setStartIndex = $idx;
    }

    public function setMaxResults($max = 20)
    {
        $this->maxResults = $max;
    }

    public function setQueryString(string $str)
    {
        $this->queryStrings[] = $str;
    }

    public function request(): \GuzzleHttp\Psr7\Response
    {
        return $this->httpClient->request(
            'GET', 
            '/books/v1/volumes', 
            [
                'query' => [
                    'q' => implode('&', $this->queryStrings),
                    'startIndex' => $this->startIndex,
                    'maxResults' => $this->maxResults,
                ]
            ]
        );
    }
}