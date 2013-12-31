<?php
namespace google\protobuf;

// @@protoc_insertion_point(namespace:.google.protobuf.FieldOptions)

/**
 * Generated by the protocol buffer compiler.  DO NOT EDIT!
 * source: google/protobuf/descriptor.proto
 *
 * -*- magic methods -*-
 *
 * @method \google\protobuf\FieldOptions\CType getCtype()
 * @method void setCtype(\google\protobuf\FieldOptions\CType $value)
 * @method bool getPacked()
 * @method void setPacked(bool $value)
 * @method bool getLazy()
 * @method void setLazy(bool $value)
 * @method bool getDeprecated()
 * @method void setDeprecated(bool $value)
 * @method string getExperimentalMapKey()
 * @method void setExperimentalMapKey(string $value)
 * @method bool getWeak()
 * @method void setWeak(bool $value)
 * @method array getUninterpretedOption()
 * @method void appendUninterpretedOption(\google\protobuf\UninterpretedOption $value)
 */
class FieldOptions extends \ProtocolBuffers\Message
{
  // @@protoc_insertion_point(traits:.google.protobuf.FieldOptions)
  
  /**
   * The ctype option instructs the C++ code generator to use a different
   * representation of the field than it normally would.  See the specific
   * options below.  This option is not yet implemented in the open source
   * release -- sorry, we'll try to include it in a future version!
   *
   * @var \google\protobuf\FieldOptions\CType $ctype
   * @tag 1
   * @label optional
   * @type \ProtocolBuffers::TYPE_ENUM
   * @see \google\protobuf\FieldOptions\CType
   **/
  protected $ctype;
  
  /**
   * The packed option can be enabled for repeated primitive fields to enable
   * a more efficient representation on the wire. Rather than repeatedly
   * writing the tag and type for each element, the entire array is encoded as
   * a single length-delimited blob.
   *
   * @var bool $packed
   * @tag 2
   * @label optional
   * @type \ProtocolBuffers::TYPE_BOOL
   **/
  protected $packed;
  
  /**
   * Should this field be parsed lazily?  Lazy applies only to message-type
   * fields.  It means that when the outer message is initially parsed, the
   * inner message's contents will not be parsed but instead stored in encoded
   * form.  The inner message will actually be parsed when it is first accessed.
   * 
   * This is only a hint.  Implementations are free to choose whether to use
   * eager or lazy parsing regardless of the value of this option.  However,
   * setting this option true suggests that the protocol author believes that
   * using lazy parsing on this field is worth the additional bookkeeping
   * overhead typically needed to implement it.
   * 
   * This option does not affect the public interface of any generated code;
   * all method signatures remain the same.  Furthermore, thread-safety of the
   * interface is not affected by this option; const methods remain safe to
   * call from multiple threads concurrently, while non-const methods continue
   * to require exclusive access.
   * 
   * 
   * Note that implementations may choose not to check required fields within
   * a lazy sub-message.  That is, calling IsInitialized() on the outher message
   * may return true even if the inner message has missing required fields.
   * This is necessary because otherwise the inner message would have to be
   * parsed in order to perform the check, defeating the purpose of lazy
   * parsing.  An implementation which chooses not to check required fields
   * must be consistent about it.  That is, for any particular sub-message, the
   * implementation must either//always* check its required fields, or//never*
   * check its required fields, regardless of whether or not the message has
   * been parsed.
   *
   * @var bool $lazy
   * @tag 5
   * @label optional
   * @type \ProtocolBuffers::TYPE_BOOL
   **/
  protected $lazy;
  
  /**
   * Is this field deprecated?
   * Depending on the target platform, this can emit Deprecated annotations
   * for accessors, or it will be completely ignored; in the very least, this
   * is a formalization for deprecating fields.
   *
   * @var bool $deprecated
   * @tag 3
   * @label optional
   * @type \ProtocolBuffers::TYPE_BOOL
   **/
  protected $deprecated;
  
  /**
   * EXPERIMENTAL.  DO NOT USE.
   * For "map" fields, the name of the field in the enclosed type that
   * is the key for this map.  For example, suppose we have:
   *   message Item {
   *     required string name = 1;
   *     required string value = 2;
   *   }
   *   message Config {
   *     repeated Item items = 1 [experimental_map_key="name"];
   *   }
   * In this situation, the map key for Item will be set to "name".
   * TODO: Fully-implement this, then remove the "experimental_" prefix.
   *
   * @var string $experimental_map_key
   * @tag 9
   * @label optional
   * @type \ProtocolBuffers::TYPE_STRING
   **/
  protected $experimental_map_key;
  
  /**
   * For Google-internal migration only. Do not use.
   *
   * @var bool $weak
   * @tag 10
   * @label optional
   * @type \ProtocolBuffers::TYPE_BOOL
   **/
  protected $weak;
  
  /**
   * The parser stores options it doesn't recognize here. See above.
   *
   * @var array $uninterpreted_option
   * @tag 999
   * @label optional
   * @type \ProtocolBuffers::TYPE_MESSAGE
   * @see \google\protobuf\UninterpretedOption
   **/
  protected $uninterpreted_option;
  
  
  // @@protoc_insertion_point(properties_scope:.google.protobuf.FieldOptions)

  // @@protoc_insertion_point(class_scope:.google.protobuf.FieldOptions)

  /**
   * get descriptor for protocol buffers
   * 
   * @return \ProtocolBuffersDescriptor
   */
  public static function getDescriptor()
  {
    static $descriptor;
    
    if (!isset($descriptor)) {
      $desc = new \ProtocolBuffers\DescriptorBuilder();
      $desc->addField(1, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_ENUM,
        "name"     => "ctype",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => \google\protobuf\FieldOptions\CType::STRING,
      )));
      $desc->addField(2, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_BOOL,
        "name"     => "packed",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => false,
      )));
      $desc->addField(5, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_BOOL,
        "name"     => "lazy",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => false,
      )));
      $desc->addField(3, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_BOOL,
        "name"     => "deprecated",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => false,
      )));
      $desc->addField(9, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_STRING,
        "name"     => "experimental_map_key",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(10, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_BOOL,
        "name"     => "weak",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => false,
      )));
      $desc->addField(999, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "uninterpreted_option",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message" => '\google\protobuf\UninterpretedOption',
      )));
      // @@protoc_insertion_point(builder_scope:.google.protobuf.FieldOptions)

      $descriptor = $desc->build();
    }
    return $descriptor;
  }

}
