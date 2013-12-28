<?php
// @@protoc_insertion_point(namespace:PHPFileOptions)

/**
 * Generated by the protocol buffer compiler.  DO NOT EDIT!
 * source: php_options.proto
 *
 * -*- magic methods -*-
 *
 * @method bool getMultipleFiles()
 * @method void setMultipleFiles()
 * @method bool getSkipUnknown()
 * @method void setSkipUnknown()
 * @method string getBaseClass()
 * @method void setBaseClass()
 *
 */
class PHPFileOptions extends \ProtocolBuffers\Message
{
  // @@protoc_insertion_point(traits:PHPFileOptions)

  /** @var bool $multiple_files tag:1  optional \ProtocolBuffers::TYPE_BOOL */
  protected $multiple_files;

  /** @var bool $skip_unknown tag:2  optional \ProtocolBuffers::TYPE_BOOL */
  protected $skip_unknown;

  /** @var string $base_class tag:3  optional \ProtocolBuffers::TYPE_STRING */
  protected $base_class;

  // @@protoc_insertion_point(properties_scope:PHPFileOptions)

  // @@protoc_insertion_point(class_scope:PHPFileOptions)

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
        "type"     => \ProtocolBuffers::TYPE_BOOL,
        "name"     => "multiple_files",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => true,
      )));
      $desc->addField(2, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_BOOL,
        "name"     => "skip_unknown",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => false,
      )));
      $desc->addField(3, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_STRING,
        "name"     => "base_class",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      // @@protoc_insertion_point(builder_scope:PHPFileOptions)

      $descriptor = $desc->build();
    }

    return $descriptor;
  }

}
