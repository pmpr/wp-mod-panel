/*! For license information please see asset_js_view_component_input_Input_vue.jYwpPVABs.js.LICENSE.txt */
"use strict";(self.webpackChunkpmpr_wp_mdl_panel=self.webpackChunkpmpr_wp_mdl_panel||[]).push([["asset_js_view_component_input_Input_vue"],{2407:function(e,t,s){s.r(t),s.d(t,{default:function(){return a}});var i=function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("div",e._b({directives:[{name:"show",rawName:"v-show",value:!e.vanished,expression:"!vanished"}]},"div",e.containerAttributes,!1),[e.label?s("label",e._b({domProps:{innerHTML:e._s(e.labelText)}},"label",e.labelProps,!1)):e._e(),e._v(" "),e.inline?s("div",{class:e.inputContainerClass},[e.isAppend?s("div",{class:e.maybePrepend},[e.$slots.prepend?s("div",{staticClass:"input-group-prepend"},[s("span",{staticClass:"input-group-text"},[e._t("prepend")],2)]):e._e(),e._v(" "),e._t("input",null,{attrs:e.inputAttrs}),e._v(" "),e.$slots.append?s("div",{staticClass:"input-group-append"},[s("span",{staticClass:"input-group-text"},[e._t("append")],2)]):e._e()],2):[e._t("input",null,{attrs:e.inputAttrs})],e._v(" "),e.desc?s("div",{class:e.descClass,domProps:{innerHTML:e._s(e.desc)}}):e._e(),e._v(" "),e._t("desc"),e._v(" "),e._t("after-desc")],2):[e._t("input",null,{attrs:e.inputAttrs}),e._v(" "),e.desc?s("div",{class:e.descClass,domProps:{innerHTML:e._s(e.desc)}}):e._e(),e._v(" "),e._t("desc"),e._v(" "),e._t("after-desc")],e._v(" "),e.verifiable?s("div",{staticClass:"col-auto mt-1"},[s("b-alert",{staticClass:"my-auto px-5 py-2 rounded-0",class:"field-status-"+(e.verified?"verified":"pending text-dark-50"),attrs:{variant:e.verified?"success":"dark",show:""},domProps:{innerHTML:e._s(e.verifyText)}})],1):e._e(),e._v(" "),e.hasSlot("after-field")?[e._t("after-field",null,{field:e.name})]:e._e()],2)};i._withStripped=!0;var l={name:"PanelInput",props:{title:String,placeholder:String,size:{type:String,default:"md"},desc:String,name:String,solid:Boolean,container:{type:Object,default:function(){return{class:""}}},attrs:[Array,Object],inline:{type:[Object,Boolean],default:function(){return{xxl:2}}},label:[String,Object,Boolean],labelAlign:{type:[String,Boolean],default:"right"},labelVertical:{type:[String,Boolean],default:"top"},value:null,classes:{type:Object,default:function(){return{container:"",input:""}}},required:Boolean,vanished:{type:Boolean,default:!1},disabled:{type:Boolean,default:!1},verified:Boolean,verifiable:Boolean,offset:[Number,String]},computed:{containerAttributes(){let e={};if(!PRHelper.getType().isEmpty(this.container)){e=this.container.attributes,e.id=this.container.id;let t=(e.class?e.class+" ":"")+this.classes.container;t=new Set(t.split(" ")),t.add("form-group"),this.inline?t.add("row"):t.delete("row"),this.vanished?t.add("pr-field-vanished"):t.delete("pr-field-vanished"),e.class=Array.from(t).join(" ")}return e},labelText(){let e=this.label;return"boolean"==typeof e?e="":"object"==typeof e&&(e=e.text),e},labelProps(){let e=this.label.attrs??{};if(e.for=this.name,this.inline){let t=new Set(e.class?e.class.split(" "):[]),s=this.labelAlign;t.add("font-size-h6"),"middle"===this.labelVertical?t.add("my-auto"):t.add("mb-2"),PRHelper.getType().each(this.inline,((e,i)=>{t.add(`col-${i}-${e}`),s&&t.add(`text-${i}-${s}`)})),e.class=Array.from(t).join(" ")}return e},inputAttrs(){let e={},t={id:this.name,name:this.name,type:"text",class:"",value:this.value,disabled:this.disabled,required:this.required,placeholder:this.placeholder};Object.assign(e,t,this.attrs);let s=(e.class?e.class+" ":"")+this.classes.input;s=new Set(s.split(" ")),s.add("fl"),s.add(`form-control-${this.size}`),this.solid&&s.add("form-control-solid"),e.class=Array.from(s).join(" ");const i=PRHelper.getType();return i.each(e,((t,s)=>{i.isEmpty(s)&&delete e[t]})),e},inputContainerClass(){let e="field-container col";return this.offset&&PRHelper.getType().each(this.inline,((t,s)=>{!1===this.label&&(t=0),e+=` col-${s}-${12-t-this.offset}`})),e},descClass:()=>"text-dark-50 mt-2",verifyText(){const e=this.verified?"verified":"pending";return this.translate(`form.input.verify.${e}`)},isAppend(){return this.hasSlot("prepend")||this.hasSlot("append")},maybePrepend(){let e="";return this.isAppend&&(e=`input-group input-group-${this.size}`,this.solid&&(e+=" input-group-solid")),e}}},a=(0,s(9792).Z)(l,i,[],!1,null,null,null).exports}}]);