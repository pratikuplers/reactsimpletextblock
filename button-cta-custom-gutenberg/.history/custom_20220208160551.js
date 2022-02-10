registerBlockType('namespace/block-slug', {

    //built-in attributes
    title: 'The name',
    description: 'Block to generate a custom event',
    icon: 'format-image',
    category: 'layout',
    
    //custom attributes
    attributes: {
        content: {type: 'string'}
    },
    
    //custom functions
    
    
    //built-in functions
    edit: function(props) {
        function somename(event) {
          props.setAttributes({content: event.target.value})
        }
    
        return wp.element.createElement(
          "div",
          null,
          wp.element.createElement(
            "h3",
            null,
            "Enter your sample text"
          ),
          wp.element.createElement("input", { type: "text", 
              value: props.attributes.content, onChange: somename })
        );
      },
    
    save() {}
    });