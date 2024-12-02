(function() {
  var template = Handlebars.template, templates = Handlebars.templates = Handlebars.templates || {};
templates['articles_item'] = template({"1":function(container,depth0,helpers,partials,data) {
    var stack1, helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, alias3="function", alias4=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "<div class=\"article-snippet\">\n    <div class=\"article-preview\"><img src=\""
    + alias4(((helper = (helper = lookupProperty(helpers,"articleImage") || (depth0 != null ? lookupProperty(depth0,"articleImage") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"articleImage","hash":{},"data":data,"loc":{"start":{"line":3,"column":43},"end":{"line":3,"column":59}}}) : helper)))
    + "\"\n                width=\"50\" /></div>\n    <div class=\"article-writeup\">\n        <h3><a href=\""
    + alias4(((helper = (helper = lookupProperty(helpers,"articleURL") || (depth0 != null ? lookupProperty(depth0,"articleURL") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"articleURL","hash":{},"data":data,"loc":{"start":{"line":6,"column":21},"end":{"line":6,"column":35}}}) : helper)))
    + "\" target=\"_blank\">"
    + alias4(((helper = (helper = lookupProperty(helpers,"articleTitle") || (depth0 != null ? lookupProperty(depth0,"articleTitle") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"articleTitle","hash":{},"data":data,"loc":{"start":{"line":6,"column":53},"end":{"line":6,"column":69}}}) : helper)))
    + "</a></h3>\n        <div class=\"topics\">\n            <ul>\n                "
    + ((stack1 = ((helper = (helper = lookupProperty(helpers,"tags") || (depth0 != null ? lookupProperty(depth0,"tags") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"tags","hash":{},"data":data,"loc":{"start":{"line":9,"column":16},"end":{"line":9,"column":26}}}) : helper))) != null ? stack1 : "")
    + "\n            </ul>\n        </div>\n    </div>\n</div>\n";
},"compiler":[8,">= 4.3.0"],"main":function(container,depth0,helpers,partials,data) {
    var stack1, helper, options, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  stack1 = ((helper = (helper = lookupProperty(helpers,"articleItems") || (depth0 != null ? lookupProperty(depth0,"articleItems") : depth0)) != null ? helper : container.hooks.helperMissing),(options={"name":"articleItems","hash":{},"fn":container.program(1, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":1,"column":0},"end":{"line":14,"column":17}}}),(typeof helper === "function" ? helper.call(depth0 != null ? depth0 : (container.nullContext || {}),options) : helper));
  if (!lookupProperty(helpers,"articleItems")) { stack1 = container.hooks.blockHelperMissing.call(depth0,stack1,options)}
  if (stack1 != null) { return stack1; }
  else { return ''; }
},"useData":true});
})();