(function() {
  var template = Handlebars.template, templates = Handlebars.templates = Handlebars.templates || {};
templates['portfolio_item'] = template({"1":function(container,depth0,helpers,partials,data) {
    var helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, alias3="function", alias4=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "<div class=\"gallery-item\">\n\n    <a href=\""
    + alias4(((helper = (helper = lookupProperty(helpers,"portfolioLink") || (depth0 != null ? lookupProperty(depth0,"portfolioLink") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"portfolioLink","hash":{},"data":data,"loc":{"start":{"line":4,"column":13},"end":{"line":4,"column":30}}}) : helper)))
    + "\" class=\"gallery-item-link "
    + alias4(((helper = (helper = lookupProperty(helpers,"addClass") || (depth0 != null ? lookupProperty(depth0,"addClass") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"addClass","hash":{},"data":data,"loc":{"start":{"line":4,"column":57},"end":{"line":4,"column":69}}}) : helper)))
    + "\" target=\""
    + alias4(((helper = (helper = lookupProperty(helpers,"linkTarget") || (depth0 != null ? lookupProperty(depth0,"linkTarget") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"linkTarget","hash":{},"data":data,"loc":{"start":{"line":4,"column":79},"end":{"line":4,"column":93}}}) : helper)))
    + "\" title=\""
    + alias4(((helper = (helper = lookupProperty(helpers,"title") || (depth0 != null ? lookupProperty(depth0,"title") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"title","hash":{},"data":data,"loc":{"start":{"line":4,"column":102},"end":{"line":4,"column":111}}}) : helper)))
    + "\">\n        <img src=\""
    + alias4(((helper = (helper = lookupProperty(helpers,"portfolioImage") || (depth0 != null ? lookupProperty(depth0,"portfolioImage") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"portfolioImage","hash":{},"data":data,"loc":{"start":{"line":5,"column":18},"end":{"line":5,"column":36}}}) : helper)))
    + "\" class=\"thumb\" /></a>\n    <span class=\"desc\">\n        <div class=\"item-title\">\n            <h2><a href=\""
    + alias4(((helper = (helper = lookupProperty(helpers,"portfolioLink") || (depth0 != null ? lookupProperty(depth0,"portfolioLink") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"portfolioLink","hash":{},"data":data,"loc":{"start":{"line":8,"column":25},"end":{"line":8,"column":42}}}) : helper)))
    + "\" target=\""
    + alias4(((helper = (helper = lookupProperty(helpers,"linkTarget") || (depth0 != null ? lookupProperty(depth0,"linkTarget") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"linkTarget","hash":{},"data":data,"loc":{"start":{"line":8,"column":52},"end":{"line":8,"column":66}}}) : helper)))
    + "\" title=\""
    + alias4(((helper = (helper = lookupProperty(helpers,"title") || (depth0 != null ? lookupProperty(depth0,"title") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"title","hash":{},"data":data,"loc":{"start":{"line":8,"column":75},"end":{"line":8,"column":84}}}) : helper)))
    + "\" class=\""
    + alias4(((helper = (helper = lookupProperty(helpers,"addClass") || (depth0 != null ? lookupProperty(depth0,"addClass") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"addClass","hash":{},"data":data,"loc":{"start":{"line":8,"column":93},"end":{"line":8,"column":105}}}) : helper)))
    + "\">"
    + alias4(((helper = (helper = lookupProperty(helpers,"portfolioTitle") || (depth0 != null ? lookupProperty(depth0,"portfolioTitle") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"portfolioTitle","hash":{},"data":data,"loc":{"start":{"line":8,"column":107},"end":{"line":8,"column":125}}}) : helper)))
    + "</a></h2>\n            <div class=\"status\" style=\"display:"
    + alias4(((helper = (helper = lookupProperty(helpers,"lockedStatus") || (depth0 != null ? lookupProperty(depth0,"lockedStatus") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"lockedStatus","hash":{},"data":data,"loc":{"start":{"line":9,"column":47},"end":{"line":9,"column":63}}}) : helper)))
    + "\" title=\""
    + alias4(((helper = (helper = lookupProperty(helpers,"title") || (depth0 != null ? lookupProperty(depth0,"title") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"title","hash":{},"data":data,"loc":{"start":{"line":9,"column":72},"end":{"line":9,"column":81}}}) : helper)))
    + "\"><svg xmlns=\"http://www.w3.org/2000/svg\" height=\"16\" viewBox=\"0 0 24 24\" width=\"16\"><path d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z\"/></svg>\n            </div>\n        </div>\n        <p>"
    + alias4(((helper = (helper = lookupProperty(helpers,"portfolioDesc") || (depth0 != null ? lookupProperty(depth0,"portfolioDesc") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"portfolioDesc","hash":{},"data":data,"loc":{"start":{"line":12,"column":11},"end":{"line":12,"column":28}}}) : helper)))
    + "</p>\n    </span>\n\n</div>\n";
},"compiler":[8,">= 4.3.0"],"main":function(container,depth0,helpers,partials,data) {
    var stack1, helper, options, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  stack1 = ((helper = (helper = lookupProperty(helpers,"portfolioItems") || (depth0 != null ? lookupProperty(depth0,"portfolioItems") : depth0)) != null ? helper : container.hooks.helperMissing),(options={"name":"portfolioItems","hash":{},"fn":container.program(1, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":1,"column":0},"end":{"line":16,"column":19}}}),(typeof helper === "function" ? helper.call(depth0 != null ? depth0 : (container.nullContext || {}),options) : helper));
  if (!lookupProperty(helpers,"portfolioItems")) { stack1 = container.hooks.blockHelperMissing.call(depth0,stack1,options)}
  if (stack1 != null) { return stack1; }
  else { return ''; }
},"useData":true});
})();