<?php
class Model {
    private $endpoint;
    private $apiKey;

    public function __construct(string $endpoint, string $apiKey) {
        $this->endpoint = $endpoint;
        $this->apiKey = $apiKey;
    }

    public function getApodData(?string $date = null): array {
        $url = $this->endpoint . '?api_key=' . $this->apiKey;
        if ($date) {
            $url .= '&date=' . $date;
        }

        $response = file_get_contents($url);
        $data = json_decode($response, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception("Invalid API response");
        }

        return $data ?? [];
    }
}
?>