# PluginExample Module

There is a design pattern called ‘Interception’ used in Plugins.

Interception is inserting code dynamically without changing the original class behaviour. In this process code is dynamically inserted between the calling code and the target object.

The difference between interception and the observer pattern however is that we don’t need a specific event to listen to. I’m sure many of you have been in a situation in Magento 1 where you’ve need to change some functionality but there wasn’t an event being fired, this would lead to rewrites and other code smells.

Anton Krill describes Interception as “Ability observe public method calls in application”, which sums it up nicely.

# Interceptors can provide functionality:

Before a method

After a method

Around a method

# Interception Integration In Magento

All interceptors are referred to as plugins in Magento 2. As Magento 2 is a configuration based system, like always we define our plugin within our XML config.

You will declare you plugin in di.xml, which makes sense.

path/to/your/module/etc/di.xml

# Example

<config>
    <type name="Magento\Catalog\Model\Product">
        <plugin name="aj_pluginexample_product" type="AJ\PluginExample\Model\Product" sortOrder="100" disabled="false" />
    </type>
</config>

You must specify these elements:

type name: A class or interface which the plugin observes.

plugin name: An arbitrary plugin name that identifies a plugin. Also used to merge the configurations for the plugin.

plugin type: The name of a plugin’s class or its virtual type. Use the following naming convention when you specify this element: \Vendor\Module\Plugin\<ClassName>.

The following elements are optional:

plugin sortOrder: Plugins that call the same method run them using this order.

plugin disabled: To disable a plugin, set this element to true. The default value is false.

# Reference

https://nathanmcbride.io/magento2/Interception-In-Magento-2

https://webkul.com/blog/magento2-use-plugins/

https://devdocs.magento.com/guides/v2.4/extension-dev-guide/plugins.html

https://www.mageplaza.com/magento-2-module-development/magento-2-plugin-interceptor.html
