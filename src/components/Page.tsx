
import React, { useEffect, useRef } from 'react';
import { motion } from 'framer-motion';

interface PageProps {
  id: string;
  isActive: boolean;
  children: React.ReactNode;
}

const Page: React.FC<PageProps> = ({ id, isActive, children }) => {
  const pageRef = useRef<HTMLDivElement>(null);

  useEffect(() => {
    if (isActive && pageRef.current) {
      // Apply the glow effect when the page becomes active
      pageRef.current.classList.add('glow-effect', 'active');
      
      // Remove the glow effect after a certain time
      const timer = setTimeout(() => {
        pageRef.current?.classList.remove('active');
      }, 2000);
      
      return () => clearTimeout(timer);
    }
  }, [isActive]);

  // Animation variants
  const variants = {
    hidden: { opacity: 0, y: 20 },
    visible: { 
      opacity: 1, 
      y: 0,
      transition: {
        duration: 0.6,
        ease: [0.22, 1, 0.36, 1]
      }
    },
    exit: { 
      opacity: 0, 
      y: -20,
      transition: {
        duration: 0.4,
        ease: [0.22, 1, 0.36, 1]
      }
    }
  };

  return (
    <motion.div
      ref={pageRef}
      id={id}
      className={`page ${isActive ? 'active' : ''}`}
      initial="hidden"
      animate={isActive ? "visible" : "hidden"}
      exit="exit"
      variants={variants}
    >
      {children}
    </motion.div>
  );
};

export default Page;
