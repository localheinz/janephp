<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi\JsonSchema\Version3\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ParameterWithSchemaWithExamplesInQueryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\ParameterWithSchemaWithExamplesInQuery';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Jane\OpenApi\JsonSchema\Version3\Model\ParameterWithSchemaWithExamplesInQuery;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Jane\OpenApi\JsonSchema\Version3\Model\ParameterWithSchemaWithExamplesInQuery();
        $data = clone $data;
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
            unset($data->{'name'});
        }
        if (property_exists($data, 'in')) {
            $object->setIn($data->{'in'});
            unset($data->{'in'});
        }
        if (property_exists($data, 'description')) {
            $object->setDescription($data->{'description'});
            unset($data->{'description'});
        }
        if (property_exists($data, 'required')) {
            $object->setRequired($data->{'required'});
            unset($data->{'required'});
        }
        if (property_exists($data, 'deprecated')) {
            $object->setDeprecated($data->{'deprecated'});
            unset($data->{'deprecated'});
        }
        if (property_exists($data, 'allowEmptyValue')) {
            $object->setAllowEmptyValue($data->{'allowEmptyValue'});
            unset($data->{'allowEmptyValue'});
        }
        if (property_exists($data, 'style')) {
            $object->setStyle($data->{'style'});
            unset($data->{'style'});
        }
        if (property_exists($data, 'explode')) {
            $object->setExplode($data->{'explode'});
            unset($data->{'explode'});
        }
        if (property_exists($data, 'allowReserved')) {
            $object->setAllowReserved($data->{'allowReserved'});
            unset($data->{'allowReserved'});
        }
        if (property_exists($data, 'schema')) {
            $value = $data->{'schema'};
            if (is_object($data->{'schema'})) {
                $value = $this->denormalizer->denormalize($data->{'schema'}, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\Schema', 'json', $context);
            }
            if (is_object($data->{'schema'}) and isset($data->{'schema'}->{'$ref'})) {
                $value = $this->denormalizer->denormalize($data->{'schema'}, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\Reference', 'json', $context);
            }
            $object->setSchema($value);
            unset($data->{'schema'});
        }
        if (property_exists($data, 'examples')) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'examples'} as $key => $value_1) {
                $value_2 = $value_1;
                if (is_object($value_1)) {
                    $value_2 = $this->denormalizer->denormalize($value_1, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\Example', 'json', $context);
                }
                if (is_object($value_1) and isset($value_1->{'$ref'})) {
                    $value_2 = $this->denormalizer->denormalize($value_1, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\Reference', 'json', $context);
                }
                $values[$key] = $value_2;
            }
            $object->setExamples($values);
            unset($data->{'examples'});
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/^x-/', $key_1)) {
                $object[$key_1] = $value_3;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getIn()) {
            $data->{'in'} = $object->getIn();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getRequired()) {
            $data->{'required'} = $object->getRequired();
        }
        if (null !== $object->getDeprecated()) {
            $data->{'deprecated'} = $object->getDeprecated();
        }
        if (null !== $object->getAllowEmptyValue()) {
            $data->{'allowEmptyValue'} = $object->getAllowEmptyValue();
        }
        if (null !== $object->getStyle()) {
            $data->{'style'} = $object->getStyle();
        }
        if (null !== $object->getExplode()) {
            $data->{'explode'} = $object->getExplode();
        }
        if (null !== $object->getAllowReserved()) {
            $data->{'allowReserved'} = $object->getAllowReserved();
        }
        if (null !== $object->getSchema()) {
            $value = $object->getSchema();
            if (is_object($object->getSchema())) {
                $value = $this->normalizer->normalize($object->getSchema(), 'json', $context);
            }
            if (is_object($object->getSchema())) {
                $value = $this->normalizer->normalize($object->getSchema(), 'json', $context);
            }
            $data->{'schema'} = $value;
        }
        if (null !== $object->getExamples()) {
            $values = new \stdClass();
            foreach ($object->getExamples() as $key => $value_1) {
                $value_2 = $value_1;
                if (is_object($value_1)) {
                    $value_2 = $this->normalizer->normalize($value_1, 'json', $context);
                }
                if (is_object($value_1)) {
                    $value_2 = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $values->{$key} = $value_2;
            }
            $data->{'examples'} = $values;
        }
        foreach ($object as $key_1 => $value_3) {
            if (preg_match('/^x-/', $key_1)) {
                $data->{$key_1} = $value_3;
            }
        }

        return $data;
    }
}