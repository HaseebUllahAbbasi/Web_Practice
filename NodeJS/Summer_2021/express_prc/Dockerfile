From node:12
WORKDIR /app
COPY package*.json ./ 
Run npm install 
COPY . .
ENV PORT=8080
EXPOSE 8080
CMD ["npm","start"]

