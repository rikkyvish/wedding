<template>
    <div>

        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <!-- page title -->
                <h2 class="title1 couple-title1 title1-border">Send Your Wishes & Love 123</h2>	
                <!-- /page title -->
                <div class="row">
                    <!-- RSVP -->
                    
                    <div class="col-sm-8">

                        <!-- Contact Form -->
                        <form id="contactForm"> 
                            <!-- Form Field -->        
                            <div class="form-group">
						            	<label for="name">Your name</label>
                                        <input 
                                            type="text"
                                            id="name"
                                            placeholder="Enter name"
                                            class="form-control required"
                                            v-model="item.name"
                                            >
                                    </div>   
						                            
						            <div class="form-group"> 
						            	<label for="message">Message</label>
						              	<textarea class="form-control required" id="comment"  placeholder="Message" v-model="item.comment"></textarea>
						            </div>    
						            <!-- /Form Field -->           
						            <!-- Form Field -->  
						            <div class="form-group form-send">
                                        <button class="btn btn-1c" @click="save1"><span class="fa fa-paper-plane"> &nbsp;</span>send</button>
						            	
						            </div>  
                            <!-- /Form Field -->                  
                          </form>	
                          <!-- / Contact form -->
                          <!-- Form - Success Message -->	
                          <div id="contactSuccess" class="contact-feedback">Your message has been sent!</div>		
                        
                        
                        
                        <div class="form">
                        </div>
                    </div>
                    <!-- /RSVP -->
                </div>
            </div>
            
        </div>
	     
    </div>
</template>
<script>

    export default {
        name: 'Component2',   
        

        data(){
            return {
                testking : "ramakant",
                lists : [],
                item : {
                    name:"",
                    comment: ""
                }
            }
        },
        mounted(){
            this.fetchall();
        },
        methods:{
            

            fetchall(){
                axios.get('/api/comment/')
                .then(res => this.lists = res.data)
            },
            save1(){
                
                let method = axios.post;
                let url = '/api/comment';
                
                console.log(method, url);

                method(url, this.item)
                    .then(res=>{

                        console.log("1");

                        this.fetchall();
                        this.item = {
                            name : "",
                            comment: ""   
                        };

                        document.getElementById('contactSuccess').style.display = 'block';

                    }).catch(error =>{

                        console.log(error)
                        
                    })
            }
            
        }
    };
</script>
