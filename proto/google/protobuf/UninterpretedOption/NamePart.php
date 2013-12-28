<?php
namespace google\protobuf\UninterpretedOption;

// @@protoc_insertion_point(namespace:google.protobuf.UninterpretedOption.NamePart)

/**
 * Generated by the protocol buffer compiler.  DO NOT EDIT!
 * source: google/protobuf/descriptor.proto
 *
 * -*- magic methods -*-
 *
 * @method string getNamePart()
 * @method void setNamePart()
 * @method bool getIsExtension()
 * @method void setIsExtension()
 *
 */
class NamePart extends \ProtocolBuffers\Message
{
  // @@protoc_insertion_point(traits:google.protobuf.UninterpretedOption.NamePart)

  /** @var string $name_part tag:1  required \ProtocolBuffers::TYPE_STRING */
  protected $name_part;

  /** @var bool $is_extension tag:2  required \ProtocolBuffers::TYPE_BOOL */
  protected $is_extension;

  // @@protoc_insertion_point(properties_scope:google.protobuf.UninterpretedOption.NamePart)

  // @@protoc_insertion_point(class_scope:google.protobuf.UninterpretedOption.NamePart)

  /**
   * get descriptor for protocol buffers
   * 
   * @return ProtocolBuffersDescriptor
   */
  public static function getDescriptor()
  {
    static $descriptor;

    if (!isset($descriptor)) {
      $desc = new \ProtocolBuffers\DescriptorBuilder();
      $desc->addField(1, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_STRING,
        "name"     => "name_part",
        "required" => true,
        "optional" => false,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(2, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_BOOL,
        "name"     => "is_extension",
        "required" => true,
        "optional" => false,
        "repeated" => false,
        "packable" => false,
        "default"  => false,
      )));
      // @@protoc_insertion_point(builder_scope:google.protobuf.UninterpretedOption.NamePart)

      $descriptor = $desc->build();
    }

    return $descriptor;
  }

}
