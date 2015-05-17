<?php

namespace GW2Treasures\GW2Api\Endpoint\V2\Recipe;

use GW2Treasures\GW2Api\Endpoint\Endpoint;

class SearchEndpoint extends Endpoint {

    /**
     * {@inheritdoc}
     */
    protected function url() {
        return 'v2/recipes/search';
    }

    /**
     * @param int|string $id
     * @return mixed
     */
    public function input( $id ) {
        $request = $this->createRequest([ 'input' => $id ]);
        return $this->getClient()->send( $request )->json([ 'object' => true ]);
    }

    /**
     * @param int|string $id
     * @return mixed
     */
    public function output( $id ) {
        $request = $this->createRequest([ 'output' => $id ]);
        return $this->getClient()->send( $request )->json([ 'object' => true ]);
    }
}