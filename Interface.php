<?php

/**
 * Serializer Interface
 */

namespace attitude\Elements;

/**
 * Serializer Interface
 *
 * @author Martin Adamko <@martin_adamko>
 * @version v0.1.0
 * @licence MIT
 *
 */
interface Serializer_Interface
{
    /**
     * Unserializes data
     *
     * Returns unserialized data
     *
     * @param   string  $data   Data to unserialize
     * @returns mixed           Unserialized data
     *
     */
    public function unserialize($data);

    /**
     * Serializes data
     *
     * Returns serialized data
     *
     * @param   mixed   $data   Data to serialize
     * @returns string          Serialized data
     *
     */
    public function serialize($data);
}
