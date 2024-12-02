(function() {
  var template = Handlebars.template, templates = Handlebars.templates = Handlebars.templates || {};
templates['isotope_item'] = template({"1":function(container,depth0,helpers,partials,data) {
    var helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, alias3="function", alias4=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "        <div class=\"isotope-item\">\n            <a href=\"photos/"
    + alias4(((helper = (helper = lookupProperty(helpers,"imageFileName") || (depth0 != null ? lookupProperty(depth0,"imageFileName") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"imageFileName","hash":{},"data":data,"loc":{"start":{"line":3,"column":28},"end":{"line":3,"column":45}}}) : helper)))
    + ".jpg\" data-fancybox=\"gallery\"\n                data-caption=\""
    + alias4(((helper = (helper = lookupProperty(helpers,"location") || (depth0 != null ? lookupProperty(depth0,"location") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"location","hash":{},"data":data,"loc":{"start":{"line":4,"column":30},"end":{"line":4,"column":42}}}) : helper)))
    + "\">\n                <img src=\"photos/"
    + alias4(((helper = (helper = lookupProperty(helpers,"imageFileName") || (depth0 != null ? lookupProperty(depth0,"imageFileName") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"imageFileName","hash":{},"data":data,"loc":{"start":{"line":5,"column":33},"end":{"line":5,"column":50}}}) : helper)))
    + "_thumb.jpg\" alt=\""
    + alias4(((helper = (helper = lookupProperty(helpers,"thumbnailAltTxt") || (depth0 != null ? lookupProperty(depth0,"thumbnailAltTxt") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"thumbnailAltTxt","hash":{},"data":data,"loc":{"start":{"line":5,"column":67},"end":{"line":5,"column":86}}}) : helper)))
    + "\" />\n                <div class=\"img-info\">\n                    <div class=\"push-bottom\">\n                        <span class=\"overlay-text\">"
    + alias4(((helper = (helper = lookupProperty(helpers,"thumbnailOverlayTxt") || (depth0 != null ? lookupProperty(depth0,"thumbnailOverlayTxt") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"thumbnailOverlayTxt","hash":{},"data":data,"loc":{"start":{"line":8,"column":51},"end":{"line":8,"column":74}}}) : helper)))
    + "</span>\n                        <span class=\"location\">"
    + alias4(((helper = (helper = lookupProperty(helpers,"location") || (depth0 != null ? lookupProperty(depth0,"location") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"location","hash":{},"data":data,"loc":{"start":{"line":9,"column":47},"end":{"line":9,"column":59}}}) : helper)))
    + "</span>\n                    </div>\n                </div>\n            </a>\n        </div>\n";
},"compiler":[8,">= 4.3.0"],"main":function(container,depth0,helpers,partials,data) {
    var stack1, helper, options, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    }, buffer = "";

  stack1 = ((helper = (helper = lookupProperty(helpers,"photos") || (depth0 != null ? lookupProperty(depth0,"photos") : depth0)) != null ? helper : container.hooks.helperMissing),(options={"name":"photos","hash":{},"fn":container.program(1, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":1,"column":8},"end":{"line":14,"column":19}}}),(typeof helper === "function" ? helper.call(depth0 != null ? depth0 : (container.nullContext || {}),options) : helper));
  if (!lookupProperty(helpers,"photos")) { stack1 = container.hooks.blockHelperMissing.call(depth0,stack1,options)}
  if (stack1 != null) { buffer += stack1; }
  return buffer;
},"useData":true});
})();