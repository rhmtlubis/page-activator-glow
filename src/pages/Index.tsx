
import React, { useState, useEffect } from 'react';
import Navigation from '../components/Navigation';
import Page from '../components/Page';
import { AnimatePresence } from 'framer-motion';

const pages = [
  { id: 'cover', label: 'Home' },
  { id: 'about', label: 'About' },
  { id: 'features', label: 'Features' },
  { id: 'pricing', label: 'Pricing' },
  { id: 'contact', label: 'Contact' }
];

const Index = () => {
  const [activePageId, setActivePageId] = useState('cover');

  const showPage = (pageId: string) => {
    if (pages.find(page => page.id === pageId)) {
      setActivePageId(pageId);
    } else {
      console.error(`Page with ID "${pageId}" not found`);
    }
  };

  useEffect(() => {
    // Initial page activation
    showPage('cover');
    
    // For demonstration, cycle through pages automatically
    const interval = setInterval(() => {
      const currentIndex = pages.findIndex(page => page.id === activePageId);
      const nextIndex = (currentIndex + 1) % pages.length;
      showPage(pages[nextIndex].id);
    }, 30000); // Change page every 30 seconds
    
    return () => clearInterval(interval);
  }, [activePageId]);

  return (
    <div className="min-h-screen w-full bg-gradient-to-b from-gray-50 to-gray-100 flex flex-col">
      {/* Noise overlay */}
      <div className="bg-noise" />
      
      {/* Header */}
      <header className="w-full py-8 relative z-10">
        <div className="container mx-auto px-4">
          <div className="flex justify-between items-center">
            <div className="flex items-center">
              <div className="w-10 h-10 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center text-white font-bold text-xl shadow-lg">
                A
              </div>
              <h1 className="ml-3 text-xl font-semibold tracking-tight">Apple-Inspired</h1>
            </div>
            
            <Navigation 
              activePageId={activePageId} 
              onPageChange={showPage} 
              pages={pages} 
            />
            
            <div className="hidden md:block">
              <button className="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded-full text-sm font-medium transition-all duration-300 ease-in-out transform hover:scale-105 shadow-md">
                Get Started
              </button>
            </div>
          </div>
        </div>
      </header>
      
      {/* Main content */}
      <main className="flex-grow container mx-auto px-4 py-12 relative">
        <AnimatePresence mode="wait">
          <Page id="cover" isActive={activePageId === 'cover'}>
            <div className="max-w-4xl mx-auto text-center">
              <span className="px-3 py-1 bg-blue-50 text-blue-500 rounded-full text-xs font-medium mb-6 inline-block">Beautifully Crafted</span>
              <h2 className="text-5xl md:text-6xl font-bold tracking-tight mb-6">Design with intention and precision</h2>
              <p className="text-xl text-gray-600 mb-10 max-w-2xl mx-auto">
                Inspired by the design principles of simplicity, clarity, and purpose.
                Create experiences that connect emotionally with users.
              </p>
              
              <div className="flex justify-center space-x-4 mb-20">
                <button className="bg-blue-500 hover:bg-blue-600 text-white px-8 py-3 rounded-full text-sm font-medium transition-all duration-300 ease-in-out transform hover:scale-105 shadow-md">
                  Get Started
                </button>
                <button className="bg-white hover:bg-gray-50 text-gray-800 px-8 py-3 rounded-full text-sm font-medium transition-all duration-300 ease-in-out transform hover:scale-105 shadow-md border border-gray-200">
                  Learn More
                </button>
              </div>
              
              <div className="relative glass-morphism p-8 rounded-2xl overflow-hidden shadow-lg">
                <div className="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-indigo-500/10"></div>
                <img 
                  src="https://images.unsplash.com/photo-1517336714731-489689fd1ca4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1626&q=80" 
                  alt="Modern design interface" 
                  className="w-full h-auto rounded-lg shadow-lg transition-all duration-500 hover:scale-[1.02]"
                />
              </div>
            </div>
          </Page>
          
          <Page id="about" isActive={activePageId === 'about'}>
            <div className="max-w-4xl mx-auto">
              <span className="px-3 py-1 bg-blue-50 text-blue-500 rounded-full text-xs font-medium mb-6 inline-block">Our Story</span>
              <h2 className="text-4xl md:text-5xl font-bold tracking-tight mb-8">Crafted with attention to every detail</h2>
              
              <div className="grid md:grid-cols-2 gap-16">
                <div>
                  <p className="text-lg text-gray-600 mb-6">
                    We believe that design is not just about how things look, but how they work. 
                    Our approach is grounded in the principles of simplicity, clarity, and purpose.
                  </p>
                  <p className="text-lg text-gray-600 mb-6">
                    Inspired by the philosophies of design legends, we strive to create experiences that 
                    connect emotionally with users while serving their practical needs.
                  </p>
                  <p className="text-lg text-gray-600">
                    Every pixel, every interaction, and every transition is crafted with intention.
                  </p>
                </div>
                
                <div className="glass-morphism rounded-2xl overflow-hidden p-6 shadow-lg relative">
                  <div className="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-indigo-500/10"></div>
                  <img 
                    src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80" 
                    alt="Design process" 
                    className="rounded-lg shadow-lg w-full h-auto"
                  />
                </div>
              </div>
            </div>
          </Page>
          
          <Page id="features" isActive={activePageId === 'features'}>
            <div className="max-w-4xl mx-auto">
              <span className="px-3 py-1 bg-blue-50 text-blue-500 rounded-full text-xs font-medium mb-6 inline-block">Key Features</span>
              <h2 className="text-4xl md:text-5xl font-bold tracking-tight mb-12">Designed with purpose</h2>
              
              <div className="grid md:grid-cols-3 gap-8">
                {[
                  {
                    title: "Simplicity",
                    description: "Reduction to the essential elements, removing the unnecessary.",
                    icon: "▲"
                  },
                  {
                    title: "Precision",
                    description: "Meticulous attention to detail in every aspect of the experience.",
                    icon: "■"
                  },
                  {
                    title: "Intention",
                    description: "Every design decision serves a clear purpose and function.",
                    icon: "●"
                  },
                  {
                    title: "Clarity",
                    description: "Communication that is direct, honest, and understandable.",
                    icon: "◆"
                  },
                  {
                    title: "Innovation",
                    description: "Pushing boundaries while remaining elegant and intuitive.",
                    icon: "★"
                  },
                  {
                    title: "Quality",
                    description: "Exceptional materials and craftsmanship in every detail.",
                    icon: "♦"
                  }
                ].map((feature, index) => (
                  <div 
                    key={index}
                    className="glass-morphism p-6 rounded-xl transition-all duration-300 hover:shadow-lg hover:scale-[1.02] relative"
                  >
                    <div className="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-indigo-500/10 rounded-xl"></div>
                    <div className="w-12 h-12 bg-blue-100 text-blue-500 rounded-full flex items-center justify-center text-xl mb-4">
                      {feature.icon}
                    </div>
                    <h3 className="text-xl font-semibold mb-2">{feature.title}</h3>
                    <p className="text-gray-600">{feature.description}</p>
                  </div>
                ))}
              </div>
            </div>
          </Page>
          
          <Page id="pricing" isActive={activePageId === 'pricing'}>
            <div className="max-w-4xl mx-auto">
              <span className="px-3 py-1 bg-blue-50 text-blue-500 rounded-full text-xs font-medium mb-6 inline-block">Pricing</span>
              <h2 className="text-4xl md:text-5xl font-bold tracking-tight mb-6">Simple, transparent pricing</h2>
              <p className="text-xl text-gray-600 mb-12 max-w-2xl">
                Choose the plan that fits your needs. All plans include core features with different levels of support and capabilities.
              </p>
              
              <div className="grid md:grid-cols-3 gap-8">
                {[
                  {
                    name: "Essential",
                    price: "$49",
                    description: "Perfect for individuals and small projects",
                    features: ["Core features", "Basic support", "1 project", "30-day history", "Community access"]
                  },
                  {
                    name: "Professional",
                    price: "$99",
                    description: "Ideal for professionals and growing teams",
                    features: ["All Essential features", "Priority support", "10 projects", "1-year history", "Advanced analytics", "Custom exports"]
                  },
                  {
                    name: "Enterprise",
                    price: "$249",
                    description: "For organizations needing the highest level of service",
                    features: ["All Professional features", "24/7 dedicated support", "Unlimited projects", "Unlimited history", "Custom integrations", "Dedicated account manager"]
                  }
                ].map((plan, index) => (
                  <div 
                    key={index}
                    className={`glass-morphism p-8 rounded-xl transition-all duration-300 relative ${
                      index === 1 ? 'border-2 border-blue-500 shadow-lg' : ''
                    }`}
                  >
                    <div className="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-indigo-500/10 rounded-xl"></div>
                    {index === 1 && (
                      <span className="absolute -top-3 left-1/2 transform -translate-x-1/2 px-3 py-1 bg-blue-500 text-white rounded-full text-xs font-medium">
                        Most Popular
                      </span>
                    )}
                    <h3 className="text-xl font-semibold mb-2">{plan.name}</h3>
                    <div className="mb-4">
                      <span className="text-4xl font-bold">{plan.price}</span>
                      <span className="text-gray-500">/month</span>
                    </div>
                    <p className="text-gray-600 mb-6">{plan.description}</p>
                    <ul className="space-y-3 mb-8">
                      {plan.features.map((feature, idx) => (
                        <li key={idx} className="flex items-center">
                          <div className="w-5 h-5 bg-blue-100 text-blue-500 rounded-full flex items-center justify-center text-xs mr-3">
                            ✓
                          </div>
                          <span className="text-gray-700">{feature}</span>
                        </li>
                      ))}
                    </ul>
                    <button className={`w-full py-3 rounded-full text-sm font-medium transition-all duration-300 ease-in-out ${
                      index === 1 
                        ? 'bg-blue-500 hover:bg-blue-600 text-white' 
                        : 'bg-white hover:bg-gray-50 text-gray-800 border border-gray-200'
                    }`}>
                      Choose Plan
                    </button>
                  </div>
                ))}
              </div>
            </div>
          </Page>
          
          <Page id="contact" isActive={activePageId === 'contact'}>
            <div className="max-w-4xl mx-auto">
              <span className="px-3 py-1 bg-blue-50 text-blue-500 rounded-full text-xs font-medium mb-6 inline-block">Get In Touch</span>
              <h2 className="text-4xl md:text-5xl font-bold tracking-tight mb-6">Let's start a conversation</h2>
              <p className="text-xl text-gray-600 mb-12 max-w-2xl">
                Have questions or need more information? We're here to help you find the perfect solution for your needs.
              </p>
              
              <div className="grid md:grid-cols-2 gap-12">
                <div className="glass-morphism p-8 rounded-xl relative">
                  <div className="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-indigo-500/10 rounded-xl"></div>
                  <form>
                    <div className="space-y-6">
                      <div>
                        <label className="block text-sm font-medium text-gray-700 mb-1">Name</label>
                        <input type="text" className="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all" />
                      </div>
                      <div>
                        <label className="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" className="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all" />
                      </div>
                      <div>
                        <label className="block text-sm font-medium text-gray-700 mb-1">Message</label>
                        <textarea rows={4} className="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all"></textarea>
                      </div>
                      <button className="w-full bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-full text-sm font-medium transition-all duration-300 ease-in-out transform hover:scale-[1.02] shadow-md">
                        Send Message
                      </button>
                    </div>
                  </form>
                </div>
                
                <div>
                  <div className="mb-10">
                    <h3 className="text-xl font-semibold mb-4">Contact Information</h3>
                    <div className="space-y-4">
                      <div className="flex items-start">
                        <div className="w-10 h-10 bg-blue-100 text-blue-500 rounded-full flex items-center justify-center text-lg mr-4">
                          ✉
                        </div>
                        <div>
                          <p className="text-sm text-gray-500">Email</p>
                          <p className="text-gray-800">contact@apple-inspired.com</p>
                        </div>
                      </div>
                      <div className="flex items-start">
                        <div className="w-10 h-10 bg-blue-100 text-blue-500 rounded-full flex items-center justify-center text-lg mr-4">
                          ☎
                        </div>
                        <div>
                          <p className="text-sm text-gray-500">Phone</p>
                          <p className="text-gray-800">+1 (123) 456-7890</p>
                        </div>
                      </div>
                      <div className="flex items-start">
                        <div className="w-10 h-10 bg-blue-100 text-blue-500 rounded-full flex items-center justify-center text-lg mr-4">
                          ⌂
                        </div>
                        <div>
                          <p className="text-sm text-gray-500">Address</p>
                          <p className="text-gray-800">
                            1 Infinite Loop<br />
                            Cupertino, CA 95014<br />
                            United States
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div>
                    <h3 className="text-xl font-semibold mb-4">Connect with Us</h3>
                    <div className="flex space-x-4">
                      {["X", "IG", "LI", "YT"].map((icon, index) => (
                        <div 
                          key={index}
                          className="w-10 h-10 bg-white text-gray-700 rounded-full flex items-center justify-center shadow-md hover:shadow-lg hover:bg-gray-50 transition-all duration-300 cursor-pointer"
                        >
                          {icon}
                        </div>
                      ))}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </Page>
        </AnimatePresence>
      </main>
      
      {/* Footer */}
      <footer className="py-12 relative z-10">
        <div className="container mx-auto px-4">
          <div className="flex flex-col md:flex-row justify-between items-center">
            <div className="mb-6 md:mb-0">
              <div className="flex items-center">
                <div className="w-8 h-8 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center text-white font-bold text-lg shadow-md">
                  A
                </div>
                <h1 className="ml-2 text-lg font-semibold tracking-tight">Apple-Inspired</h1>
              </div>
              <p className="text-gray-500 text-sm mt-2">Designed with intention and precision.</p>
            </div>
            
            <div className="flex flex-wrap justify-center gap-x-12 gap-y-4">
              {pages.map((page) => (
                <button 
                  key={page.id}
                  className="text-gray-600 hover:text-blue-500 transition-colors text-sm"
                  onClick={() => showPage(page.id)}
                >
                  {page.label}
                </button>
              ))}
            </div>
            
            <div>
              <p className="text-gray-500 text-sm">&copy; 2023 Apple-Inspired. All rights reserved.</p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  );
};

export default Index;
