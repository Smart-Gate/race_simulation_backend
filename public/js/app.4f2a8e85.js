(function(){"use strict";var e={967:function(e,t,a){var n=a(144),s=a(998),r=a(3059),i=function(){var e=this,t=e._self._c;return t(s.Z,[t("HeaderComponent"),t(r.Z,[t("router-view")],1)],1)},o=[],l=a(6232),c=a(5550),d=a(9223),u=a(4324),p=a(5808),h=a(4525),m=a(4611),k=a(1927),f=a(7233),v=a(7953),Z=function(){var e=this,t=e._self._c;return t("div",[t(l.Z,{attrs:{color:"blue",dark:"",dense:""}},[t(c.Z,{on:{click:function(t){t.stopPropagation(),e.Drawer=!e.Drawer}}}),t(v.qW,[e._v("Racing simulation App")])],1),t(f.Z,{attrs:{fixed:"",temporary:""},model:{value:e.Drawer,callback:function(t){e.Drawer=t},expression:"Drawer"}},[t(p.Z,{attrs:{nav:"",dense:""}},[t(h.Z,[t(k.V9,[e._v(" Racing simulation App ")])],1),t(d.Z),t(h.Z,{attrs:{to:"/cars"}},[t(m.Z,[t(u.Z,[e._v(" mdi-car-cog ")])],1),t(k.V9,[e._v("Cars Managment")])],1),t(h.Z,{attrs:{to:"/tracks"}},[t(m.Z,[t(u.Z,[e._v(" mdi-road ")])],1),t(k.V9,[e._v("Tracks Managment")])],1),t(h.Z,{attrs:{to:"/races"}},[t(m.Z,[t(u.Z,[e._v(" mdi-windsock ")])],1),t(k.V9,[e._v("Races Managment")])],1),t(h.Z,{attrs:{to:"/brake"}},[t(m.Z,[t(u.Z,[e._v(" mdi-car-brake-abs ")])],1),t(k.V9,[e._v("Brake Simulator")])],1)],1)],1)],1)},C=[],b={name:"HeaderComponent",data(){return{Drawer:!1}}},_=b,x=a(1001),g=(0,x.Z)(_,Z,C,!1,null,null,null),S=g.exports,T={components:{HeaderComponent:S},name:"App",data:()=>({})},A=T,G=(0,x.Z)(A,i,o,!1,null,null,null),P=G.exports,w=a(8345),y=a(9582),B=a(4886),D=a(2150),I=function(){var e=this,t=e._self._c;return t("div",[t(D.Z,[t(y.Z,{attrs:{"max-width":"400"}},[t(B.EB,[e._v(" Racing Simulation ")]),t(B.ZB,[e._v(" this is a sample project for race simulation ")])],1)],1)],1)},R=[],$={name:"HomeView",components:{}},j=$,O=(0,x.Z)(j,I,R,!1,null,null,null),M=O.exports,E=a(5883),V=a(6190),q=a(266),N=a(3875),H=a(4061),U=a(5125),K=a(1713),L=a(9258),W=a(7808),F=function(){var e=this,t=e._self._c;return t("div",[t(E.Z,[t("h3",[e._v("Cars Managment")])]),t(d.Z),t(K.Z,[t(q.Z,{attrs:{md:"6"}}),t(q.Z,{attrs:{md:"5"}}),t(q.Z,{attrs:{md:"1"}},[t(V.Z,{on:{click:function(t){e.Car.type="Create",e.Car.open=!0,e.Car.data={}}}},[t(u.Z,[e._v("mdi-pencil-plus-outline")])],1)],1)],1),t(d.Z),t(H.Z,{attrs:{width:"90vw"},model:{value:e.Car.open,callback:function(t){e.$set(e.Car,"open",t)},expression:"Car.open"}},[t(D.Z,{staticClass:"background pa-3",attrs:{fluid:""}},[t(U.Z,[t(y.Z,{attrs:{flat:""}},[t(B.EB,[t(K.Z,{staticClass:"my-0 mx-1 caption",attrs:{align:"center",justify:"start"}},[t("h1",{staticClass:"font-weight-regular"},[t(u.Z,{attrs:{large:""}},[e._v("mdi-pencil-plus-outline")]),e._v(" "+e._s(e.Car.type)+" ")],1)])],1),t(d.Z),t(W.Z,{attrs:{label:"Car Name",filled:"",rounded:"","prepend-inner-icon":"mdi-star",required:""},model:{value:e.Car.data.name,callback:function(t){e.$set(e.Car.data,"name",t)},expression:"Car.data.name"}}),t(W.Z,{attrs:{label:"Top Speed",filled:"",rounded:"","prepend-inner-icon":"mdi-star",required:""},model:{value:e.Car.data.top_speed,callback:function(t){e.$set(e.Car.data,"top_speed",t)},expression:"Car.data.top_speed"}}),t(d.Z),t(W.Z,{attrs:{label:"Acceleration",filled:"",rounded:"","prepend-inner-icon":"mdi-star",required:""},model:{value:e.Car.data.acceleration,callback:function(t){e.$set(e.Car.data,"acceleration",t)},expression:"Car.data.acceleration"}}),t(d.Z),t(W.Z,{attrs:{label:"Break Acceleration",filled:"",rounded:"","prepend-inner-icon":"mdi-star",required:""},model:{value:e.Car.data.break_acceleration,callback:function(t){e.$set(e.Car.data,"break_acceleration",t)},expression:"Car.data.break_acceleration"}}),t(d.Z),t(B.h7,[t(K.Z,{staticClass:"my-1",attrs:{align:"center",justify:"center"}},[t(V.Z,{staticClass:"mx-2 mt-3",attrs:{large:"",color:"error",rounded:""},on:{click:function(t){e.Car.Type="",e.Car.open=!1,e.Car.data={},e.GetCarsAPI()}}},[t(u.Z,{attrs:{color:"white"}},[e._v("mdi-close-circle-outline")]),e._v(" Cancle ")],1),t(V.Z,{staticClass:"mx-2 mt-3",attrs:{large:"",color:"success",rounded:""},on:{click:function(t){return e.Submit(e.Car.data)}}},[t(u.Z,{attrs:{color:"white"}},[e._v("mdi-content-save-all-outline")]),e._v(" Save ")],1)],1)],1)],1)],1)],1)],1),t(N.Z,{attrs:{headers:e.Cars.headers,items:e.Cars.data},scopedSlots:e._u([{key:"item.actions",fn:function({item:a}){return[t(u.Z,{staticClass:"mr-2",attrs:{small:""},on:{click:function(t){e.Car.type="Edit",e.Car.open=!0,e.Car.data=a}}},[e._v(" mdi-pencil ")]),t(u.Z,{attrs:{small:""},on:{click:function(t){return e.Delete(a)}}},[e._v(" mdi-delete ")])]}}],null,!0)}),t(L.Z,{attrs:{"multi-line":!0},model:{value:e.Snackbar.open,callback:function(t){e.$set(e.Snackbar,"open",t)},expression:"Snackbar.open"}},[e._v(" "+e._s(e.Snackbar.text)+" ")])],1)},z=[],J={Domain:function(){return window.location.hostname.includes("localhost")?"http://127.0.0.1:8000":""},API1:function(){return"/api/car/"},API2:function(){return"/api/path/"},API3:function(){return"/api/race/"},API4:function(){return"/api/break/"}},Q={name:"CarsView",data(){return{GeneralClasses:J,Cars:{data:[],headers:[{text:"ID",align:"start",value:"id"},{text:"Name",value:"name"},{text:"Top Speed (Km/h)",value:"top_speed"},{text:"Acceleration",value:"acceleration"},{text:"Break Acceleration",value:"break_acceleration"},{text:"Created_at",value:"created_at"},{text:"Actions",value:"actions",sortable:!1}]},Car:{open:!1,data:{},type:""},Snackbar:{open:!1,text:""}}},methods:{GetCarsAPI:function(){this.$http.get(this.GeneralClasses.Domain()+this.GeneralClasses.API1()).then((e=>{this.Cars.data=e.data.data})).catch((e=>{console.log(e.response.data)}))},Submit(e){var t="Edit"==this.Car.type?this.GeneralClasses.Domain()+this.GeneralClasses.API1()+e.id:this.GeneralClasses.Domain()+this.GeneralClasses.API1();this.$http.post(t,this.Car.data).then((e=>{this.GetCarsAPI(),this.Snackbar.open=!0,this.Snackbar.text=e.data.status,this.Car.open=!1,this.Car.data={},this.Car.type=""})).catch((e=>{this.Snackbar.open=!0,this.Snackbar.text=e.response.data,console.log(e.response.data)}))},Delete(e){this.$swal.fire({title:"Are you sure?",showCancelButton:!0,confirmButtonText:"delete",denyButtonText:"cancle",icon:"error"}).then((t=>{t.isConfirmed&&this.$http.delete(this.GeneralClasses.Domain()+this.GeneralClasses.API1()+e.id).then((e=>{this.Snackbar.open=!0,this.Snackbar.text=e.data.status,this.GetCarsAPI()})).catch((e=>{this.Snackbar.open=!0,this.Snackbar.text=e.response.data,console.log(e.response.data)}))}))}},mounted(){this.GetCarsAPI()}},X=Q,Y=(0,x.Z)(X,F,z,!1,null,null,null),ee=Y.exports,te=function(){var e=this,t=e._self._c;return t("div",[t(E.Z,[t("h3",[e._v("Tracks Managment")])]),t(d.Z),t(K.Z,[t(q.Z,{attrs:{md:"6"}}),t(q.Z,{attrs:{md:"5"}}),t(q.Z,{attrs:{md:"1"}},[t(V.Z,{on:{click:function(t){e.Track.type="Create",e.Track.open=!0,e.Track.data={}}}},[t(u.Z,[e._v("mdi-pencil-plus-outline")])],1)],1)],1),t(d.Z),t(H.Z,{attrs:{width:"90vw"},model:{value:e.Track.open,callback:function(t){e.$set(e.Track,"open",t)},expression:"Track.open"}},[t(D.Z,{staticClass:"background pa-3",attrs:{fluid:""}},[t(U.Z,[t(y.Z,{attrs:{flat:""}},[t(B.EB,[t(K.Z,{staticClass:"my-0 mx-1 caption",attrs:{align:"center",justify:"start"}},[t("h1",{staticClass:"font-weight-regular"},[t(u.Z,{attrs:{large:""}},[e._v("mdi-pencil-plus-outline")]),e._v(" "+e._s(e.Track.type)+" ")],1)])],1),t(d.Z),t(W.Z,{attrs:{label:"Track Name",filled:"",rounded:"","prepend-inner-icon":"mdi-star",required:""},model:{value:e.Track.data.name,callback:function(t){e.$set(e.Track.data,"name",t)},expression:"Track.data.name"}}),t(W.Z,{attrs:{label:"Length",filled:"",rounded:"","prepend-inner-icon":"mdi-star",required:""},model:{value:e.Track.data.length,callback:function(t){e.$set(e.Track.data,"length",t)},expression:"Track.data.length"}}),t(d.Z),t(B.h7,[t(K.Z,{staticClass:"my-1",attrs:{align:"center",justify:"center"}},[t(V.Z,{staticClass:"mx-2 mt-3",attrs:{large:"",color:"error",rounded:""},on:{click:function(t){e.Track.Type="",e.Track.open=!1,e.Track.data={},e.GetTrackAPI()}}},[t(u.Z,{attrs:{color:"white"}},[e._v("mdi-close-circle-outline")]),e._v(" Cancle ")],1),t(V.Z,{staticClass:"mx-2 mt-3",attrs:{large:"",color:"success",rounded:""},on:{click:function(t){return e.Submit(e.Track.data)}}},[t(u.Z,{attrs:{color:"white"}},[e._v("mdi-content-save-all-outline")]),e._v(" Save ")],1)],1)],1)],1)],1)],1)],1),t(N.Z,{attrs:{headers:e.Tracks.headers,items:e.Tracks.data},scopedSlots:e._u([{key:"item.actions",fn:function({item:a}){return[t(u.Z,{staticClass:"mr-2",attrs:{small:""},on:{click:function(t){e.Track.type="Edit",e.Track.open=!0,e.Track.data=a}}},[e._v(" mdi-pencil ")]),t(u.Z,{attrs:{small:""},on:{click:function(t){return e.Delete(a)}}},[e._v(" mdi-delete ")])]}}],null,!0)}),t(L.Z,{attrs:{"multi-line":!0},model:{value:e.Snackbar.open,callback:function(t){e.$set(e.Snackbar,"open",t)},expression:"Snackbar.open"}},[e._v(" "+e._s(e.Snackbar.text)+" ")])],1)},ae=[],ne={name:"TracksView",data(){return{GeneralClasses:J,Tracks:{data:[],headers:[{text:"ID",align:"start",value:"id"},{text:"Name",value:"name"},{text:"Length (m)",value:"length"},{text:"Created_at",value:"created_at"},{text:"Actions",value:"actions",sortable:!1}]},Track:{open:!1,data:{},type:""},Snackbar:{open:!1,text:""}}},methods:{GetTrackAPI:function(){this.$http.get(this.GeneralClasses.Domain()+this.GeneralClasses.API2()).then((e=>{this.Tracks.data=e.data.data})).catch((e=>{console.log(e.response.data)}))},Submit(e){var t="Edit"==this.Track.type?this.GeneralClasses.Domain()+this.GeneralClasses.API2()+e.id:this.GeneralClasses.Domain()+this.GeneralClasses.API2();this.$http.post(t,this.Track.data).then((e=>{this.GetTrackAPI(),this.Snackbar.open=!0,this.Snackbar.text=e.data.status,this.Track.open=!1,this.Track.data={},this.Track.type=""})).catch((e=>{this.Snackbar.open=!0,this.Snackbar.text=e.response.data,console.log(e.response.data)}))},Delete(e){this.$swal.fire({title:"Are you sure?",showCancelButton:!0,confirmButtonText:"delete",denyButtonText:"cancle",icon:"error"}).then((t=>{t.isConfirmed&&this.$http.delete(this.GeneralClasses.Domain()+this.GeneralClasses.API2()+e.id).then((e=>{this.Snackbar.open=!0,this.Snackbar.text=e.data.status,this.GetTrackAPI()})).catch((e=>{this.Snackbar.open=!0,this.Snackbar.text=e.response.data,console.log(e.response.data)}))}))}},mounted(){this.GetTrackAPI()}},se=ne,re=(0,x.Z)(se,te,ae,!1,null,null,null),ie=re.exports,oe=a(5375),le=function(){var e=this,t=e._self._c;return t("div",[t(E.Z,[t("h3",[e._v("Races Managment")])]),t(d.Z),t(K.Z,[t(q.Z,{attrs:{md:"6"}}),t(q.Z,{attrs:{md:"5"}}),t(q.Z,{attrs:{md:"1"}},[t(V.Z,{on:{click:function(t){e.GetCarsAPI(),e.GetTrackAPI(),e.Race.open=!0,e.Race.data={}}}},[t(u.Z,[e._v("mdi-pencil-plus-outline")])],1)],1)],1),t(d.Z),t(H.Z,{attrs:{width:"90vw"},model:{value:e.Race.open,callback:function(t){e.$set(e.Race,"open",t)},expression:"Race.open"}},[t(D.Z,{staticClass:"background pa-3",attrs:{fluid:""}},[t(U.Z,[t(y.Z,{attrs:{flat:""}},[t(B.EB,[t(K.Z,{staticClass:"my-0 mx-1 caption",attrs:{align:"center",justify:"start"}},[t("h1",{staticClass:"font-weight-regular"},[t(u.Z,{attrs:{large:""}},[e._v("mdi-pencil-plus-outline")]),e._v(" Create Reace ")],1)])],1),t(d.Z),t(W.Z,{attrs:{label:"Race Name",filled:"",rounded:"","prepend-inner-icon":"mdi-star",required:""},model:{value:e.Race.data.name,callback:function(t){e.$set(e.Race.data,"name",t)},expression:"Race.data.name"}}),t(oe.Z,{attrs:{items:e.Tracks,"item-value":"id",label:"Track",rounded:"","prepend-inner-icon":"mdi-star"},scopedSlots:e._u([{key:"selection",fn:function(t){return[e._v(" "+e._s(t.item.name)+" - "+e._s(t.item.length)+" m ")]}},{key:"item",fn:function(t){return[e._v(" "+e._s(t.item.name)+" - "+e._s(t.item.length)+" m ")]}}]),model:{value:e.Race.data.path,callback:function(t){e.$set(e.Race.data,"path",t)},expression:"Race.data.path"}}),t(oe.Z,{attrs:{items:e.Cars,"item-value":"id",label:"Cars",rounded:"","prepend-inner-icon":"mdi-star",chips:"",multiple:"",attach:"",solo:"","item-text":"name"},model:{value:e.Race.data.cars,callback:function(t){e.$set(e.Race.data,"cars",t)},expression:"Race.data.cars"}}),t(d.Z),t(B.h7,[t(K.Z,{staticClass:"my-1",attrs:{align:"center",justify:"center"}},[t(V.Z,{staticClass:"mx-2 mt-3",attrs:{large:"",color:"error",rounded:""},on:{click:function(t){e.Race.open=!1,e.Race.data={},e.GetRaceAPI()}}},[t(u.Z,{attrs:{color:"white"}},[e._v("mdi-close-circle-outline")]),e._v(" Cancle ")],1),t(V.Z,{staticClass:"mx-2 mt-3",attrs:{large:"",color:"success",rounded:""},on:{click:function(t){return e.Submit()}}},[t(u.Z,{attrs:{color:"white"}},[e._v("mdi-content-save-all-outline")]),e._v(" Save ")],1)],1)],1)],1)],1)],1)],1),t(H.Z,{attrs:{width:"90vw"},model:{value:e.RaceDetails.open,callback:function(t){e.$set(e.RaceDetails,"open",t)},expression:"RaceDetails.open"}},[t(N.Z,{attrs:{headers:e.RaceDetails.headers,items:e.Race.data.cars}})],1),t(N.Z,{attrs:{headers:e.Races.headers,items:e.Races.data},scopedSlots:e._u([{key:"item.actions",fn:function({item:a}){return[t(u.Z,{staticClass:"mr-2",attrs:{small:""},on:{click:function(t){e.Race.data=a,e.RaceDetails.open=!0}}},[e._v(" mdi-car-info ")]),t(u.Z,{attrs:{small:""},on:{click:function(t){return e.Delete(a)}}},[e._v(" mdi-delete ")])]}}],null,!0)}),t(L.Z,{attrs:{"multi-line":!0},model:{value:e.Snackbar.open,callback:function(t){e.$set(e.Snackbar,"open",t)},expression:"Snackbar.open"}},[e._v(" "+e._s(e.Snackbar.text)+" ")])],1)},ce=[],de={name:"RacesView",data(){return{GeneralClasses:J,Races:{data:[],headers:[{text:"ID",align:"start",value:"id"},{text:"Name",value:"name"},{text:"Actions",value:"actions",sortable:!1}]},RaceDetails:{open:!1,headers:[{text:"Car ID",align:"start",value:"id"},{text:"Car",value:"name"},{text:"Top Speed Km/h",value:"top_speed"},{text:"Acceleration",value:"acceleration"},{text:"Time Until Top Speed S",value:"time_until_top_speed"},{text:"Dist Until Top Speed M",value:"dist_until_top_speed"},{text:"Time With Top Speed S",value:"time_with_top_speed"},{text:"Dist With Top Speed",value:"dist_with_top_speed"},{text:"Total Time",value:"total_time"},{text:"Path Length",value:"path_length"},{text:"Total Dist",value:"total_dist"}]},Cars:[],Tracks:[],Race:{open:!1,data:{}},Snackbar:{open:!1,text:""}}},methods:{GetRaceAPI:function(){this.$http.get(this.GeneralClasses.Domain()+this.GeneralClasses.API3()).then((e=>{this.Races.data=e.data.data})).catch((e=>{console.log(e.response.data)}))},GetCarsAPI:function(){this.$http.get(this.GeneralClasses.Domain()+this.GeneralClasses.API1()).then((e=>{this.Cars=e.data.data})).catch((e=>{console.log(e.response.data)}))},GetTrackAPI:function(){this.$http.get(this.GeneralClasses.Domain()+this.GeneralClasses.API2()).then((e=>{this.Tracks=e.data.data,console.log(this.Tracks.data)})).catch((e=>{this.Snackbar.open=!0,this.Snackbar.text=e.response.data,console.log(e.response.data)}))},Submit(){this.$http.post(this.GeneralClasses.Domain()+this.GeneralClasses.API3(),this.Race.data).then((e=>{this.GetRaceAPI(),this.Snackbar.open=!0,this.Snackbar.text="number of errors:"+e.data.errors_number,this.Race.open=!1,this.Race.data={}})).catch((e=>{this.Snackbar.open=!0,this.Snackbar.text=e.response.data,console.log(e.response.data)}))},Delete(e){this.$swal.fire({title:"Are you sure?",showCancelButton:!0,confirmButtonText:"delete",denyButtonText:"cancle",icon:"error"}).then((t=>{t.isConfirmed&&this.$http.delete(this.GeneralClasses.Domain()+this.GeneralClasses.API3()+e.id).then((e=>{this.Snackbar.open=!0,this.Snackbar.text=e.data.status,this.GetRaceAPI()})).catch((e=>{this.Snackbar.open=!0,this.Snackbar.text=e.response.data,console.log(e.response.data)}))}))}},mounted(){this.GetRaceAPI()}},ue=de,pe=(0,x.Z)(ue,le,ce,!1,null,null,null),he=pe.exports,me=function(){var e=this,t=e._self._c;return t("div",[t(E.Z,[t("h3",[e._v("Brake Simulator")])]),t(d.Z),t(K.Z,[t(q.Z,{attrs:{md:"6"}}),t(q.Z,{attrs:{md:"5"}}),t(q.Z,{attrs:{md:"1"}},[t(V.Z,{on:{click:function(t){e.GetCarsAPI(),e.Brake.open=!0,e.Brake.data={}}}},[t(u.Z,[e._v("mdi-pencil-plus-outline")])],1)],1)],1),t(d.Z),t(H.Z,{attrs:{width:"90vw"},model:{value:e.Brake.open,callback:function(t){e.$set(e.Brake,"open",t)},expression:"Brake.open"}},[t(D.Z,{staticClass:"background pa-3",attrs:{fluid:""}},[t(U.Z,[t(y.Z,{attrs:{flat:""}},[t(B.EB,[t(K.Z,{staticClass:"my-0 mx-1 caption",attrs:{align:"center",justify:"start"}},[t("h1",{staticClass:"font-weight-regular"},[t(u.Z,{attrs:{large:""}},[e._v("mdi-pencil-plus-outline")]),e._v(" Create Reace ")],1)])],1),t(d.Z),t(W.Z,{attrs:{label:"Brake Name",filled:"",rounded:"","prepend-inner-icon":"mdi-star",required:""},model:{value:e.Brake.data.name,callback:function(t){e.$set(e.Brake.data,"name",t)},expression:"Brake.data.name"}}),t(oe.Z,{attrs:{items:e.Cars,"item-value":"id",label:"Cars",rounded:"","prepend-inner-icon":"mdi-star",chips:"",multiple:"",attach:"",solo:"","item-text":"name"},model:{value:e.Brake.data.cars,callback:function(t){e.$set(e.Brake.data,"cars",t)},expression:"Brake.data.cars"}}),t(d.Z),t(B.h7,[t(K.Z,{staticClass:"my-1",attrs:{align:"center",justify:"center"}},[t(V.Z,{staticClass:"mx-2 mt-3",attrs:{large:"",color:"error",rounded:""},on:{click:function(t){e.Brake.open=!1,e.Brake.data={},e.GetBrakeAPI()}}},[t(u.Z,{attrs:{color:"white"}},[e._v("mdi-close-circle-outline")]),e._v(" Cancle ")],1),t(V.Z,{staticClass:"mx-2 mt-3",attrs:{large:"",color:"success",rounded:""},on:{click:function(t){return e.Submit()}}},[t(u.Z,{attrs:{color:"white"}},[e._v("mdi-content-save-all-outline")]),e._v(" Save ")],1)],1)],1)],1)],1)],1)],1),t(H.Z,{attrs:{width:"90vw"},model:{value:e.BrakeDetails.open,callback:function(t){e.$set(e.BrakeDetails,"open",t)},expression:"BrakeDetails.open"}},[t(N.Z,{attrs:{headers:e.BrakeDetails.headers,items:e.Brake.data.cars}})],1),t(N.Z,{attrs:{headers:e.Brakes.headers,items:e.Brakes.data},scopedSlots:e._u([{key:"item.actions",fn:function({item:a}){return[t(u.Z,{staticClass:"mr-2",attrs:{small:""},on:{click:function(t){e.Brake.data=a,e.BrakeDetails.open=!0}}},[e._v(" mdi-car-info ")]),t(u.Z,{attrs:{small:""},on:{click:function(t){return e.Delete(a)}}},[e._v(" mdi-delete ")])]}}],null,!0)}),t(L.Z,{attrs:{"multi-line":!0},model:{value:e.Snackbar.open,callback:function(t){e.$set(e.Snackbar,"open",t)},expression:"Snackbar.open"}},[e._v(" "+e._s(e.Snackbar.text)+" ")])],1)},ke=[],fe={name:"BrakesView",data(){return{GeneralClasses:J,Brakes:{data:[],headers:[{text:"ID",align:"start",value:"id"},{text:"Name",value:"name"},{text:"Actions",value:"actions",sortable:!1}]},BrakeDetails:{open:!1,headers:[{text:"Car ID",align:"start",value:"id"},{text:"Car",value:"name"},{text:"Top Speed Km/h",value:"top_speed"},{text:"Brake Acceleration",value:"break_acceleration"},{text:"Time Until Stop S",value:"time_until_stop"},{text:"Dist Until Stop M",value:"dist_until_stop"}]},Cars:[],Brake:{open:!1,data:{}},Snackbar:{open:!1,text:""}}},methods:{GetBrakeAPI:function(){this.$http.get(this.GeneralClasses.Domain()+this.GeneralClasses.API4()).then((e=>{this.Brakes.data=e.data.data})).catch((e=>{console.log(e.response.data)}))},GetCarsAPI:function(){this.$http.get(this.GeneralClasses.Domain()+this.GeneralClasses.API1()).then((e=>{this.Cars=e.data.data})).catch((e=>{console.log(e.response.data)}))},Submit(){this.$http.post(this.GeneralClasses.Domain()+this.GeneralClasses.API4(),this.Brake.data).then((e=>{this.GetBrakeAPI(),this.Snackbar.open=!0,this.Snackbar.text=e.data.status,this.Brake.open=!1,this.Brake.data={}})).catch((e=>{this.Snackbar.open=!0,this.Snackbar.text=e.response.data,console.log(e.response.data)}))},Delete(e){this.$swal.fire({title:"Are you sure?",showCancelButton:!0,confirmButtonText:"delete",denyButtonText:"cancle",icon:"error"}).then((t=>{t.isConfirmed&&this.$http.delete(this.GeneralClasses.Domain()+this.GeneralClasses.API4()+e.id).then((e=>{this.Snackbar.open=!0,this.Snackbar.text=e.data.status,this.GetBrakeAPI()})).catch((e=>{this.Snackbar.open=!0,this.Snackbar.text=e.response.data,console.log(e.response.data)}))}))}},mounted(){this.GetBrakeAPI()}},ve=fe,Ze=(0,x.Z)(ve,me,ke,!1,null,null,null),Ce=Ze.exports;n.ZP.use(w.ZP);const be=[{path:"/",name:"home",component:M},{path:"/cars",name:"cars",component:ee},{path:"/tracks",name:"tracks",component:ie},{path:"/races",name:"races",component:he},{path:"/brake",name:"brake",component:Ce}],_e=new w.ZP({mode:"history",base:"/",routes:be});var xe=_e,ge=a(629);n.ZP.use(ge.ZP);var Se=new ge.ZP.Store({state:{},getters:{},mutations:{},actions:{},modules:{}}),Te=a(1705);n.ZP.use(Te.Z);var Ae=new Te.Z({}),Ge=a(9669),Pe=a.n(Ge),we=a(3982),ye=a.n(we);n.ZP.config.productionTip=!1,n.ZP.prototype.$http=Pe(),n.ZP.use(ye()),new n.ZP({router:xe,store:Se,vuetify:Ae,render:e=>e(P)}).$mount("#app")}},t={};function a(n){var s=t[n];if(void 0!==s)return s.exports;var r=t[n]={exports:{}};return e[n].call(r.exports,r,r.exports,a),r.exports}a.m=e,function(){var e=[];a.O=function(t,n,s,r){if(!n){var i=1/0;for(d=0;d<e.length;d++){n=e[d][0],s=e[d][1],r=e[d][2];for(var o=!0,l=0;l<n.length;l++)(!1&r||i>=r)&&Object.keys(a.O).every((function(e){return a.O[e](n[l])}))?n.splice(l--,1):(o=!1,r<i&&(i=r));if(o){e.splice(d--,1);var c=s();void 0!==c&&(t=c)}}return t}r=r||0;for(var d=e.length;d>0&&e[d-1][2]>r;d--)e[d]=e[d-1];e[d]=[n,s,r]}}(),function(){a.n=function(e){var t=e&&e.__esModule?function(){return e["default"]}:function(){return e};return a.d(t,{a:t}),t}}(),function(){a.d=function(e,t){for(var n in t)a.o(t,n)&&!a.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:t[n]})}}(),function(){a.g=function(){if("object"===typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(e){if("object"===typeof window)return window}}()}(),function(){a.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)}}(),function(){a.r=function(e){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})}}(),function(){var e={143:0};a.O.j=function(t){return 0===e[t]};var t=function(t,n){var s,r,i=n[0],o=n[1],l=n[2],c=0;if(i.some((function(t){return 0!==e[t]}))){for(s in o)a.o(o,s)&&(a.m[s]=o[s]);if(l)var d=l(a)}for(t&&t(n);c<i.length;c++)r=i[c],a.o(e,r)&&e[r]&&e[r][0](),e[r]=0;return a.O(d)},n=self["webpackChunkracing_simulation_fronend"]=self["webpackChunkracing_simulation_fronend"]||[];n.forEach(t.bind(null,0)),n.push=t.bind(null,n.push.bind(n))}();var n=a.O(void 0,[998],(function(){return a(967)}));n=a.O(n)})();
//# sourceMappingURL=app.4f2a8e85.js.map